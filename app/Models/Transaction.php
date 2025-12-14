<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'game_id',
    'product_id',
    'user_game_id',
    'server_id',
    'status',
    'amount',
    'payment_method',];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
  
  public function product()
  {
    return $this->belongsTo(Product::class);
  }
  
  public function game()
  {
    return $this->belongsTo(Game::class);
  }
}
    