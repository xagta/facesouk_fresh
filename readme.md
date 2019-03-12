
<h2> deployement steps </h2>

<p>
<ul>
<li> git clone https://github.com/xagta/facesouk_fresh.git </li>
<li> configure .env : 

<li> APP_URL=http://localhost:8000 </li>
<li> DB_DATABASE=facesouk_fresh</li>
<li>DB_USERNAME=root</li>
<li>DB_PASSWORD= </li>


</li>
<li> run : composer install </li>
<li> run : php artisan voyager:install</li>
<li> run : php artisan migrate </li>
<li> run : php artisan seed:db </li>
<li> run : php artisan seed:db --class=ArtisantProductsSeeder <li>
</ul>

</p>
<p> 
Troubleshooting: Specified key was too long error. If you see this error message you have an outdated version of MySQL, use the following solution: https://laravel-news.com/laravel-5-4-key-too-long-error
</p>