<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Models\Obat;
use App\Models\Jenis;

class iterasi3test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     
    public function testLihatObat()
    {
        $this->withoutExceptionHandling();
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->get(route('obat.index'));
            $response->assertStatus(200);
    
        }

    public function testTambahObat()
    {
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->post(route('obat.store'), [   
            'kodeobat' => '999',
            'namaobat' => 'Obat Testing',
            'id_jenis' => '1',
            'expired' => '2030-1-2',
            'dosis' => '999 mg',
            'harga' => '999',
            'stok' => '999'
                ]);
            $response->assertStatus(302);
    }

    public function testEditObat()
    {
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->put(route('obat.update',3), [   
            'kodeobat' => '111',
            'namaobat' => 'Obat update',
            'id_jenis' => '1',
            'expired' => '2000-1-1',
            'dosis' => '111 mg',
            'harga' => '111',
            'stok' => '111'
                ]);
            $response->assertStatus(302);
    }

    public function testHapusObat()
    {
        $user = User::where('is_admin','1')->first();
        $response = $this->actingAs($user)->delete(route('obat.destroy',1));
        $response->assertStatus(302);
    }
}
