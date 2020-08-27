<div class="container mt-4">
    <h1 class="text-center">Quickstart</h1>
    <h1 class="text-center">Let's get this party started!</h1>
    <p class="text-center">This is a quickstart guide, please check documentation for more in depth information.</p>
    <h2>Install Laravel authentication</h2>
    <pre><code>composer require laravel/ui
    </code></pre>
    <pre><code>php artisan ui vue --auth
    </code></pre>
    <p>Migrate database.</p>
    <h2>Install Turbolinks</h2>
    <p>Install Turbolinks on your Laravel app.</p>
    <pre><code>npm install turbolinks
    </code></pre>
    <p>Add Turbolinks to your <code>app.js</code> below bootstrap.js.</p>
    <pre><code class="language-javascript">require('./bootstrap');
    var Turbolinks = require("turbolinks")
    Turbolinks.start()
    </code></pre>
    <p>Add <code>data-turbolinks-track</code> attribute to your <code>script/css</code> tags.
    Make sure to check this happens on every page <code>layouts.app</code>.</p>
    <pre><code class="language-html">
    &lt;head&gt;
      &lt;script defer src="{{ mix('js/app.js') }}" data-turbolinks-track="true" &gt;&lt;/script&gt;

      &lt;link href="{{mix('css/app.css')}}" rel="stylesheet" data-turbolinks-track="true"&gt;
    &lt;/head&gt;
    </code></pre>
    <p>Please check that your <code>app.js</code> is loaded on every page.</p>
    <h2>Install Crudwire</h2>
    <pre><code>composer require janmoo/crudwire
    </code></pre>
    <p>npm install && npm run dev</p>
    <pre><code>npm install && npm run dev
    </code></pre>
    <h1 class="text-center voila">All set and ready to go.</h1>
    <h1 class="text-center voila">You should have succesfully installed crudwire.</h1>
    <h3 class="text-center voila">Check out the documentation for more in depth info.</h3>
</div>
