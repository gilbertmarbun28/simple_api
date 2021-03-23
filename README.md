# simple_api
Untuk memasukkan project ini ke perangkat ada beberapa hal yang perlu dilakukan, yaitu: 
1. Pada terminal direktori proyek, silahkan ketikkan command "Composer Install"
2. Silahkan persiapkan satu database terlebih dahulu, lalu ubah nama database pada file .env
3. Ketikkan "php artisan migrate"
4. lalu ketikkan "php artisan serve"
5. buka postman lalu silahkan coba dengan api register (localhost:(port perangkat)/api/register)
6. pada saat register pada bagian body silahkan mengisi kolom name, email, password, c_password
7. ketika sudah di register, akan dapat token, silahkan copy
8. kemudian coba api login, tetapi terlebih dahulu ke tab header pada postman isi field dengan
    a. Accept dengan isi application/json
    b. Authorization dengan isi Bearer + token
9. silahkan coba api login dan juga crud mahasiswa
