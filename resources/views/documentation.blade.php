<div class="container ml-2 mt-3">
    <h1>Documentation</h1>
    <h1>requirements</h1>
    <p>this package requires you to install:</p>
    <ul>
        <li>turbolinks.js</li>
        <li>laravel authentication</li>
    </ul>
    <p>this package uses <a href="https://getbootstrap.com/" title="bootsrap official site">bootstrap</a></p>
    <p><a href="https://medium.com/web-developer/turbolinks-with-laravel-speed-up-navigation-in-your-laravel-app-with-turobolinks-41efbade643b"
            title="medium turbolinks.js install guide">guide turbolinks.js</a></p>
    <p><a href="https://www.npmjs.com/package/turbolinks" title="npm turbolinks.js">npm turbolink</a></p>
    <p><a href="https://laravel.com/docs/7.x/authentication" title="laravel authentication">documentation laravel
            authentication</a></p>
    <p><a href="https://laravel-livewire.com/">official livewire site</a></p>
    <h1>quickstart</h1>
    <p>note this a quickstart guide for more info visit links above</p>
    <h2>install turbolinks</h2>
    <p>install turbolinks on your laravel app</p>
    <pre><code>npm install turbolinks
</code></pre>
    <p>add Turbolinks to your app.js below bootstrap.js</p>
    <pre><code class="language-javascript">require('./bootstrap');
var Turbolinks = require("turbolinks")
Turbolinks.start()
</code></pre>
    <p>add data-turbolinks-track attribute to your script/css tags
        make sure that this happens on every page (layouts.app)</p>
    <pre><code class="language-html">&lt;head&gt;
  &lt;script defer src="{{ mix('js/app.js') }}" data-turbolinks-track="true" &gt;&lt;/script&gt;

  &lt;link href="{{mix('css/app.css')}}" rel="stylesheet" data-turbolinks-track="true"&gt;
&lt;/head&gt;
</code></pre>
    <p>make sure that your app.js is loaded on every page</p>
    <h2>install laravel authentication</h2>
    <pre><code>composer require laravel/ui
</code></pre>
    <p>run in laravel application</p>
    <pre><code>php artisan ui vue --auth
</code></pre>
    <p>migrate database</p>
    <h1>install crudwire</h1>
    <pre><code>composer require janmoo/crudwire
</code></pre>
    <p>now you can run php artisan serve, and visit localhost/crudwire</p>
    <h1>Diggin Deeper</h1>
    <h2>configuration options</h2>
    <p>To change the configuration options you must publish the config, this can be done with the command below.</p>
    <pre><code>php artisan vendor:publish
</code></pre>
    <h3>routes</h3>
    <p>Standard crudwire is configured to be served on the route yourwebsite.example/crudwire. This prefix can be
        changed by publishing the config.</p>
    <p>Now you can add an <code>ENV</code> variables to .env <code>CRUDWIRE_PREFIX</code> which can be set to whatever
        you like.</p>
    <p>e.g: <code>CRUDWIRE_PREFIX=example</code> =&gt; yourwebsite.example/crudwire is where you will find the user
        overview.</p>
    <p>The routes used by Crudwire are the following:
        | route | name | method |
        | -------------------|------------------| -------- |
        | /prefix | <code>'crudwire'</code> | <strong>GET</strong> |
        | /prefix/user | <code>'newuser'</code> | <strong>GET</strong> |
        | /prefix/user | <code>'createuser'</code> | <strong>POST</strong> |
        | /prefix/user/{id} | <code>'edituser'</code> | <strong>GET</strong> |
        | /prefix/user/{id} | <code>'updateuser'</code> | <strong>POST</strong> |</p>
    <p>All of these routes use the CruwireUserController.php</p>
    <p>There's 2 more variables which can be added to .ENV, CRUDWIRE_AUTH which can be set to TRUE(default FALSE). If
        true auth will be added to the middleware of the routes used by Crudwire.</p>
    <h3>the layouts used by crudwire</h3>
    <p>The last env variable that can be set in the .ENV, is CRUDWIRE_LAYOUT this defines the layout which crudwire uses
        to extend and display views. By default this is set to crudwire::layouts.base. Important don't forget to add the
        livewire directives (@livewireStyles and @livewireScripts), Add turbolinks.js and make sure your layout has a
        @section('content')</p>
    <h2>extending and customizing this package</h2>
    <p>It's important to note that at the moment virtual columns are not yet supported.</p>
    <p>In the view: <code>create.blade.php</code> there's a SWITCH which can be customized to add support for extra
        input elements.
        The validation of the form input to create or update a user can be found in the
        <code>CrudwireUserController.php</code> the methods: <code>validateUserscreate()</code> and
        <code>validateUsersUpdate</code> here you can add your own validation rules if necessary.</p>

</div>
