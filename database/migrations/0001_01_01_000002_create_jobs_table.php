public function up()
{
    Schema::create('pendaftars', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->string('email')->unique();
        $table->string('no_hp');
        $table->text('alamat');
        $table->string('pilihan_program'); // Contoh: Tahfidz, Kitab Kuning
        $table->timestamps();
    });
}