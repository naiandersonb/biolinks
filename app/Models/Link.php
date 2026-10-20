<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    public function user()
    {
        // um link pertence a um usuário
        return $this->belongsTo(User::class);
    }

    private function move($to)
    {
        $order = $this->sort;
        $newOrder = $order + $to;

        $swapWith = $this->user->links()->where('sort', '=', $newOrder)->first();

        $this->fill(['sort' => $newOrder])->save();
        $swapWith->fill(['sort' => $order])->save();
    }

    public function moveUp()
    {
        $this->move(-1);
    }

    public function moveDown()
    {
        $this->move(+1);
    }
}
