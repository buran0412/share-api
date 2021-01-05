    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->string('share_id');
            $table->string('user_id');
            $table->timestamps();
        });
    }