<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contacts(){
        $contacts = Contact::all();
        return response()->json(
            [
                'contacts'=>$contacts,
                'message'=>'Contacts',
                'code'=>200
            ]
        );
    }

    public function getContact($id){
        $contact = Contact::find($id);
        return response()->json($contact);
    }

    public function saveContact(Request $req){
        $contact = new Contact();
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->designation = $req->designation;
        $contact->contact_no = $req->contact_no;
        $contact->save();
        return response()->json([
            'message' => 'Contact created successfully',
            'code' => 200
        ]);
    }
    public function updateContact(Request $req,$id){
        $contact = Contact::find($id);
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->designation = $req->designation;
        $contact->contact_no = $req->contact_no;
        $contact->save();
        return response()->json([
            'message' => 'Contact updated successfully',
            'code' => 200
        ]);
    }

    public function deleteContact($id){
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
            return response()->json([
                'message'=>'Contact deleted successfully',
                'code'=>200,
            ]);
        } else {
            return response()->json([
                'message'=>"Contact withh id:$id does not exist"
            ]);
        }

    }
}
