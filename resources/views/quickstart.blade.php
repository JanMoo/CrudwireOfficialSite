<div class="container mt-4">
    <h1 class="text-center">quickstart</h1>
    <h1 class="text-center">let's get this party started!</h1>
    <p class="text-center">note this a quickstart guide for more info checkout the documentation</p>
    <h2>Install Laravel authentication</h2>
    <pre><code>composer require laravel/ui
    </code></pre>
    <p>Run in Laravel application.</p>
    <pre><code>php artisan ui vue --auth
    </code></pre>
    <p>Migrate database</p>
    <h2>Install Turbolinks</h2>
    <p>Install Turbolinks on your Laravel app.</p>
    <pre><code>npm install turbolinks
    </code></pre>
    <p>Add Turbolinks to your app.js below bootstrap.js.</p>
    <pre><code class="language-javascript">require('./bootstrap');
    var Turbolinks = require("turbolinks")
    Turbolinks.start()
    </code></pre>
    <p>Add data-turbolinks-track attribute to your script/css tags
    make sure that this happens on every page (layouts.app).</p>
    <pre><code class="language-html">
    &lt;head&gt;
      &lt;script defer src="{{ mix('js/app.js') }}" data-turbolinks-track="true" &gt;&lt;/script&gt;

      &lt;link href="{{mix('css/app.css')}}" rel="stylesheet" data-turbolinks-track="true"&gt;
    &lt;/head&gt;
    </code></pre>
    <p>Make sure that your app.js is loaded on every page.</p>
    <h2>Install Crudwire</h2>
    <pre><code>composer require janmoo/crudwire
    </code></pre>
    <p>npm install && npm run dev</p>
    <pre><code>npm install && npm run dev
    </code></pre>
    <h1 class="text-center voila">Voila!</h1>
    <h1 class="text-center voila">you should have succesfully installed crudwire</h1>
    <h3 class="text-center voila">check out the documentation for more info</h3>
</div>
