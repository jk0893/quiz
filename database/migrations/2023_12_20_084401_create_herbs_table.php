<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('herbs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('herbs')->insert([
            ['name' => 'куркума молотая'],
            ['name' => 'паприка молотая'],
            ['name' => 'горчица'],
            ['name' => 'перец красный молотый чили'],
            ['name' => 'петрушка сушёная'],
            ['name' => 'кориандр молотый'],
            ['name' => 'тимьян'],
            ['name' => 'соль'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('herbs');
    }
};
