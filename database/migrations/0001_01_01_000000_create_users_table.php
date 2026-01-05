public function up()
{
    Schema::create('pendaftars', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->string('email');
        $table->string('no_hp');
        $table->text('alamat');
        $table->timestamps();
    });
}