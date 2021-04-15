<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = 'loan_requests';

    protected $fillable = [
        "surname",
        "firstname",
        "email",
        "telephone",
        "address",
        "amount",
        "purpose",
        "comment",
        "status"
    ];
}
