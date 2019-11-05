#RESTful API - laravel default un-hashed token based approach...

###Step - 1

* Modify users_table migration with adding a column name `api_token` 
    * Must be unique value `$table->string('api_token', 80)->unique()->nullable()->default(null);`

###Step - 2
* Make sure the driver is **token** in `config/auth.php` under `guards` array. like below - 

> 'api' => [
              'driver' => 'token',
              'provider' => 'users',
              'hash' => false,
          ]
 

###Step - 3
* Go to __*User*__ model `User.php` file and add the following method -

```
    public function createToken() {

        do {

            $randStr = Str::random(80);

            $exist = $this->where('api_token', $randStr)->exists();

        } while($exist);


        $this->api_token = $randStr;

        $this->save();

        return $this;
    }

```

###Step - 4

* Just go to your `api.php` routes file and do the thing you need to do......
