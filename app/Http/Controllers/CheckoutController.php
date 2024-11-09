<?php

namespace App\Http\Controllers;

use App\Mail\TransactionSuccess;
use App\Models\BuktiTransaction;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TravelPackage;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


class CheckoutController extends Controller
{
    public function index(Request $request, string $id)
    {
        $item = Transaction::with(['details', 'travel_packages', 'users'])->findOrFail($id);
        return view('pages.checkout', [
            'item' => $item,
        ]);
    }

    // memasukan data kedalam tabel trs status in_cart
    public function process(Request $request, string $id)
    {
        $travel_packages = TravelPackage::findOrFail($id);
        $item = Transaction::with(['details', 'travel_packages', 'users'])->findOrFail($id);
        $transactions = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'NIK' => $item->NIK,
            'image' => $item->image,
            'transaction_total' => $travel_packages->price,
            'transaction_status' => 'IN_CART'
        ]);

        // data member sendiri
        TransactionDetail::create([
            'transactions_id' => $transactions->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'NIK' => Auth::user()->NIK,
        ]);

        return redirect()->route('checkout', $transactions->id);
    }

    public function remove(Request $request, string $details_id)
    {
        $item = TransactionDetail::findOrFail($details_id);

        $transactions = Transaction::with(['details', 'travel_packages'])
            ->findOrFail($item->transactions_id);

        $transactions->transaction_total -= $transactions->travel_packages->price;

        $transactions->save();
        $item->delete();

        return redirect()->route('checkout', $item->transactions_id);
    }

    public function create(Request $request, string $id)
    {
        $request->validate([
            // 'username' => 'required|string|exists:users,username',
            'NIK' => 'required|string',
            // 'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        // $image = $request->file('image');
        // $filename = date('Y-m-d') . $image->getClientOriginalName();
        // $path = 'bukti-image/' . $filename;

        // Storage::disk('public')->put($path, file_get_contents($image));

        $data = $request->all();
        $data['transactions_id'] = $id;
        // $data['image'] = $filename;

        TransactionDetail::create($data);

        $transactions = Transaction::with(['travel_packages'])->find($id);



        $transactions->transaction_total += $transactions->travel_packages->price;

        $transactions->save();

        return redirect()->route('checkout', $id);
    }

    public function success(Request $request, string $id)
    {
        $transactions = Transaction::with(['details', 'travel_packages', 'users', 'galleries'])->findOrFail($id);
        $transactions->transaction_status = 'PENDING';

        $transactions->save();

        // kirim e tiket
        // Mail::to('aaaa@gmail.com')->send(
        //     new TransactionSuccess()
        // );

        $item = Transaction::with(['details', 'travel_packages', 'users', 'galleries'])->findOrFail($id);



        if ($request->get('export') == 'pdf') {
            $pdf = Pdf::loadView('pages.pdf.tiket', ['item' => $item]);
            return $pdf->download('sukses.pdf');
        }


        return view('pages.sukses', [
            'item' => $item

        ]);

    }

    public function bukti(Request $request, string $id)
    {
        $request->validate([
            // 'username' => 'required|string|exists:users,username',
            'NIK' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        $image = $request->file('image');
        $filename = date('Y-m-d') . $image->getClientOriginalName();
        $path = 'bukti-image/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($image));

        $data = $request->all();
        $data['transactions_id'] = $id;
        $data['image'] = $filename;

        TransactionDetail::create($data);




        return redirect()->route('checkout', $id);
    }
}
