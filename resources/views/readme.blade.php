<div class="container ml-2 mt-5">
    <h1 class="text-center page-title mb-2">Documentation</h1>
    <h3 class="text-center">This package was build thanks to these technologies.</h3>

        <ul class="list-inline text-center">
            <li class="list-inline-item">
                <strong>
                    <a href="https://github.com/Jeroen-G/laravel-packager" title="laravel-packager" alt="link to git repo laravel-packager">
                        Laravel-packager
                    </a>
                </strong>
            </li>
            <li class="list-inline-item">
                <strong>
                    <a href="https://laravel-livewire.com/" title="laravel-livewire official site" alt="link to livewire website">
                        Livewire
                    </a>
                </strong>
            </li>
            <li class="list-inline-item">
                <strong>
                    <a href="https://laravel.com" title="official laravel site" alt="link to laravel website">
                        Laravel
                    </a>
                </strong>
            </li>
            <li class="list-inline-item">
                <strong>
                    <a href="https://www.npmjs.com/package/turbolinks" title="npm turbolinks.js">
                        Turbolinks.js
                    </a>
                </strong>
            </li>
            <li class="list-inline-item">
                <strong>
                    <a href="https://getbootstrap.com/" title="Bootstrap official site" alt="link to Bootstrap website">
                        Bootstrap
                    </a>
                </strong>
            </li>
        </ul>
    <h2 class="mt-2"> 1 Installation</h2>
    <p>This package requires you to install:</p>
    <ul class="list-inline">
        <li class="list-inline-item">
            <strong>
                <a href="https://www.npmjs.com/package/turbolinks" title="npm turbolinks.js" alt="link to turbolinks on npm">
                    Turbolinks.js
                </a>
            </strong>
        </li>
        <li class="list-inline-item">
            <strong>
                <a href="https://laravel.com/docs/7.x/authentication" title="laravel authentication" alt="link to laravel authentication official documentation">
                Laravel authentication
                </a>
            </strong>
        </li>
    </ul>
    <p>This package uses
        <strong>
            <a href="https://getbootstrap.com/" title="bootstrap official site" alt="link to Bootstrap website">
            Bootstrap
            </a>
        </strong>
    </p>
    <h4 class="mt-4"> 1.1 Install Laravel authentication</h4>
    <p>Install Laravel authentication on your app.</p>
    <pre><code>composer require laravel/ui
</code></pre>
    <p>Run in laravel application.</p>
    <pre><code>php artisan ui vue --auth
</code></pre>
    <p>Migrate database.</p>
    <h4 class="mt-2"> 1.2 Install Turbolinks</h4>
    <p>Install Turbolinks on your laravel app.</p>
    <pre><code>npm install turbolinks
</code></pre>
    <p>Add Turbolinks to your app.js below bootstrap.js.</p>
    <pre><code class="language-javascript">require('./bootstrap');
var Turbolinks = require("turbolinks")
Turbolinks.start()
</code></pre>
    <p>Add data-turbolinks-track attribute to your script/css tags
        make sure that this happens on every page (layouts.app).</p>
    <pre><code class="language-html">&lt;head&gt;
  &lt;script defer src="{{ mix('js/app.js') }}" data-turbolinks-track="true" &gt;&lt;/script&gt;

  &lt;link href="{{mix('css/app.css')}}" rel="stylesheet" data-turbolinks-track="true"&gt;
&lt;/head&gt;
</code></pre>
    <p>Make sure that your app.js is loaded on every page.</p>
    <h4 class="mt-4"> 1.3 install crudwire</h4>
    <p>Now you can install crudwire.</p>
    <pre><code>composer require janmoo/crudwire
</code></pre>
    <p>npm install && npm run dev</p>
    <pre><code>npm install && npm run dev
    </code></pre>
    <p>Now you can run php artisan serve, and visit localhost/crudwire/user.</p>
    <h2 class="mt-5"> 2 Diggin Deeper</h2>
    <h4 class="mt-1"> 2.1 Configuration options</h4>
    <p>To change the configuration options you must publish the config, this can be done with the command below.</p>
    <pre><code>php artisan vendor:publish
</code></pre>
    <h4> 2.1.1 Routes</h4>
    <p>By default crudwire is configured to be served on the route yourwebsite.example/crudwire/user. This prefix can be
        changed by publishing the config.</p>
    <p>Now you can add an <code>ENV</code> variables to .env <code>CRUDWIRE_PREFIX</code> which can be set to whatever
        you like.</p>
    <p>e.g: <code>CRUDWIRE_PREFIX=happy</code> =&gt; yourwebsite.example/happy is where you will find the user
        overview.</p>
    <p>The routes used by Crudwire are the following:
        <table class="table table-borderless table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">route</th>
                    <th scope="col">name</th>
                    <th scope="col">method</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>/<code>CRUDWIRE_PREFIX</code>/user</td>
                    <td><code>'crudwire.user.index'</code> </td>
                    <td><strong>GET</strong> </td>
                </tr>
                <tr>
                    <td>/<code>CRUDWIRE_PREFIX</code>/user/create</td>
                    <td><code>'crudwire.user.create'</code></td>
                    <td><strong>GET</strong> </td>
                </tr>
                <tr>
                    <td>/<code>CRUDWIRE_PREFIX</code>/user</td>
                    <td><code>'crudwire.user.store'</code></td>
                    <td><strong>POST</strong></td>
                </tr>
                <tr>
                    <td>/<code>CRUDWIRE_PREFIX</code>/user/{user}/edit</td>
                    <td><code>'crudwire.user.edit'</code></td>
                    <td><strong>GET</strong></td>
                </tr>
                <tr>
                    <td>/<code>CRUDWIRE_PREFIX</code>/user/{user}</td>
                    <td><code>'crudwire.user.update'</code></td>
                    <td><strong>PUT|PATCH</strong></td>
                </tr>
            </tbody>
        </table>
    <p>All of these routes use the CruwireUsersController.php.</p>
    <h4> 2.1.2 Adding AUTH to the middleware</h4>
    <p> <code>CRUDWIRE_MIDDLEWARE</code> can be added to the <code>.ENV</code>. This is an array containing all the middleware used by the crudwire routes, crudwire uses the middleware <code>'web'</code>so this must always be present.</p>
    <h4> 2.1.3 The layouts used by Crudwire</h4>
    <p>The last env variable that can be set in the <code>.ENV</code>, is <code>CRUDWIRE_LAYOUT</code> this defines the layout which crudwire uses
        to extend and display views. By default this is set to <code>crudwire::layouts.base</code>. Important don't forget to add the
        livewire directives <code>@@livewireStyles</code> and <code>@@livewireScripts</code>. Add turbolinks.js and make sure your layout has a
        <code>@@section('content')</code></p>
    <h2 class="mt-5"> 3 Extending and customizing this package</h2>
    <p>It's important to note that at the moment virtual columns are not yet supported.</p>
    <h4> 3.1 Changing the validation rules</h4>
    <p>When the config file is published, you will find that it contains arrays with validation rules. One array to validate newly created users <code>validation_rules_create_new_user</code> another one when users info get updated <code>validation_rules_update_user</code> These arrays can, euhm <strong>must</strong> be customized to reflect changes made to the $user model or migration. Crudwire is configured to display all fields that are <code>$fillable</code>.</p>
    <h4> 3.2 Adding input elements to the create and update view</h4>
    <p>In the config file app/config/crudwire.php, you will find an array <code>crudwire_form_inputs</code>, to this array you can add the name of your blade components with a key of the columnname. An example of an input blade component can be found in <code>resources/views/vendor/crudwire/form/inputs</code></p>
    <p> e.g.: Blade component name equal to <code>form.input.name</code> and DB columnname equal to name.</p>
    <pre><code>'crudwire_form_inputs'                  => ['name'    => 'form.inputs.name'],
    </code></pre>
    <h4> 3.2 Customizing the Crudwire Views</h4>
    <p>Once you have used the <code>vendor:publish</code> command you will find the views <code>resources/views/vendor/crudwire</code>. When customized laravel will automaticly detect changes and use the customized view.</p>
</div>
