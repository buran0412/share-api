    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('share_id');
            $table->string('user_id');
            $table->string('content');
            $table->timestamps();
        });
    }