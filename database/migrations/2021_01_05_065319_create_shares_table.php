public function up()
{
Schema::create('shares', function (Blueprint $table) {
$table->id();
$table->string('user_id');
$table->string('share');
$table->timestamps();
});
}