<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('traduzione')->nullable();
            $table->string('ideogramma')->nullable();
            $table->timestamps();
        });

        $categories = [
            ['name' => 'Zensai', 'traduzione' => 'Antipasti', 'ideogramma' => '前菜'],
            ['name' => 'Nigiri', 'traduzione' => 'Riso pressato', 'ideogramma' => '握り'],
            ['name' => 'Sashimi', 'traduzione' => 'Pesce crudo', 'ideogramma' => '刺身'],
            ['name' => 'Gunkan', 'traduzione' => 'Nave da guerra', 'ideogramma' => '軍艦'],
            ['name' => 'Maki', 'traduzione' => 'Rotoli', 'ideogramma' => '巻き'],
            ['name' => 'Ramen & Noodles', 'traduzione' => 'Zuppa di noodles', 'ideogramma' => 'ラーメンと麺類'],
            ['name' => 'Omakase', 'traduzione' => 'Scelta dello chef', 'ideogramma' => 'お任せ'],
            ['name' => 'Donburi', 'traduzione' => 'Ciotola di riso', 'ideogramma' => '丼'],
            ['name' => 'Dezāto', 'traduzione' => 'Dessert', 'ideogramma' => 'デザート'],
            ['name' => 'Wine & Sake', 'traduzione' => 'Vino e sakè', 'ideogramma' => 'ワインと酒'],
            ['name' => 'Bollicine', 'traduzione' => 'Spumanti', 'ideogramma' => null],
            ['name' => 'Champagne', 'traduzione' => 'Champagne', 'ideogramma' => null],
            ['name' => 'Japan Beer Drink & Spirits', 'traduzione' => 'Birre e alcolici giapponesi', 'ideogramma' => null],
            ['name' => 'Soft Drink & Snack', 'traduzione' => 'Bibite e snack', 'ideogramma' => null],
            ['name' => 'Other', 'traduzione' => 'Altro', 'ideogramma' => null]
        ];
    
        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
