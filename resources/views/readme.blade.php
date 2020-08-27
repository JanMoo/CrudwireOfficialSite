<div class="container ml-2 mt-5">
    <h1 class="text-center page-title mb-2">Documentation</h1>
    <h3 class="text-center">Crudwire was built thanks to the following technologies.</h3>

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
    <h2>Table of contents</h2>
    <ol>
        <li>
            <a href="#installation">installation</a>
            <ol>
                <li><a href="#Install-Laravel-authentication">Install Laravel authentication</a></li>
                <li><a href="#install-turbolinks">Install Turbolinks</a></li>
                <li><a href="#install-crudwire">Install Crudwire</a></li>
            </ol>
        </li>
        <li>
            <a href="#configuration">Configuration options</a>
            <ol>
                <li><a href="#publishing-the-configuration-file">Publishing the configuration file</a></li>
                <li><a href="#routes">routes</a></li>
                <li><a href="#auth">Adding AUTH to the middleware</a></li>
                <li><a href="#pagiantion">Changing the pagination</a></li>
                <li><a href="#displayed-columns">Change which columns are displayed in the user overview</a></li>
            </ol>
        </li>
        <li>
            <a href="#extending-customizing">Extending and customizing this package</a>
            <ol>
                <li><a href="#validation">Changing the validation rules</a></li>
                <li><a href="#input-elements">Adding input elements to the <code>create</code> and <code>update</code> view</a></li>
                <li><a href="#crudwire-views">Customizing the Crudwire Views</a></li>
            </ol>
        </li>
    </ol>
    <h2 class="mt-2" id="installation"> 1 Installation</h2>
    <p>
    <ul class="list-inline">
        <li class="list-inline-item">
            <strong>
                <a href="https://www.npmjs.com/package/turbolinks" title="npm turbolinks.js" alt="link to turbolinks on npm">
                    Turbolinks.js</a>
            </strong>
        </li> and  <li class="list-inline-item">
            <strong>
                <a href="https://laravel.com/docs/7.x/authentication" title="laravel authentication" alt="link to laravel authentication official documentation">
                Laravel authentication
                </a>
            </strong>
        </li>
    </ul>
    must be installed to use Crudwire.
    </p>
    <p>This package uses
        <strong>
            <a href="https://getbootstrap.com/" title="bootstrap official site" alt="link to Bootstrap website">
            Bootstrap.
            </a>
        </strong>
    </p>
    <h4 class="mt-4" id="Install-Laravel-authentication"> 1.1 Install Laravel authentication</h4>
    <p>Install Laravel authentication on your app.</p>
    <pre><code>composer require laravel/ui
</code></pre>
    <pre><code>php artisan ui vue --auth
</code></pre>
    <p>Migrate database.</p>
    <h4 class="mt-2" id="install-turbolinks"> 1.2 Install Turbolinks</h4>
    <p>Install Turbolinks on your laravel app.</p>
    <pre><code>npm install turbolinks
</code></pre>
    <p>Add Turbolinks to your <code>app.js</code> below <code>bootstrap.js</code>.</p>
    <pre><code class="language-javascript">require('./bootstrap');
var Turbolinks = require("turbolinks")
Turbolinks.start()
</code></pre>
    <p>Add <code>data-turbolinks-track</code> attribute to your <code>script/css </code>tags.
        Make sure to check this happens on every page (layouts.app).</p>
    <pre><code class="language-html">&lt;head&gt;
  &lt;script defer src="{{ mix('js/app.js') }}" data-turbolinks-track="true" &gt;&lt;/script&gt;

  &lt;link href="{{mix('css/app.css')}}" rel="stylesheet" data-turbolinks-track="true"&gt;
&lt;/head&gt;
</code></pre>
    <p>Plese check that your <code>app.js</code> is loaded on every page.</p>
    <h4 class="mt-4" id="install-crudwire"> 1.3 Install Crudwire</h4>
    <p>Now you can install Crudwire.</p>
    <pre><code>composer require janmoo/crudwire
</code></pre>
    <p>Don't forget to run:</p>
    <pre><code>npm install && npm run dev
    </code></pre>
    <p>Now you can run <code>php artisan serve</code>, and visit <code>localhost/crudwire/user</code>.</p>
    <h2 class="mt-5" id="configuration"> 2 Configuration options</h2>
    <h4 class="mt-1" id="publishing-the-configuration-file"> 2.1 Publishing the configuration file</h4>
    <p>To change the configuration options you must publish the configuration file, this can be done with the command below.</p>
    <pre><code>php artisan vendor:publish --tag="crudwire.config"
</code></pre>
    <h4 id="#routes"> 2.2 Routes</h4>
    <p>By default crudwire is configured to be served on the route <code>yourwebsite.example/crudwire/user</code>. This prefix can be
        changed by publishing the config.</p>
    <p>Now you can add an <code>ENV</code> variable to the <code>.ENV</code><code>CRUDWIRE_PREFIX</code>.</p>
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
    <p>All of these routes use the <code>CruwireUsersController.php</code>.</p>
    <h4 id="auth"> 2.3 Adding AUTH to the middleware</h4>
    <p> <code>CRUDWIRE_MIDDLEWARE</code> can be added to the <code>.ENV</code>. This array contains all the middleware used by Crudwire routes, Crudwire uses the middleware <code>'web'</code>, make sure this is always present.</p>
    <h4> 2.4 The layouts used by Crudwire</h4>
    <p>To change the layout used by Crudwire. You should add <code>CRUDWIRE_LAYOUT</code> to the <code>.ENV</code> file. This variable defines the layout which crudwire uses
        to extend and display views. By default this is set to <code>crudwire::layouts.base</code>. Please don't forget to add the
        livewire directives <code>@@livewireStyles</code> and <code>@@livewireScripts</code> to your own layout. Add <code>turbolinks.js</code> and make sure your layout has a
        <code>@@section('content')</code></p>
    <h4 id="pagination"> 2.4 Changing the pagination</h4>
    <p>By adding the <code>CRUDWIRE_PAGINATION</code> variable to the <code>.ENV</code> file, you can change the default pagination which is set to 10. The value given to the variable should be a non negative integer.</p>
    <h4 id="displayed-columns"> 2.5 Change which columns are displayed in the user overview</h4>
    <p>By adding the <code>CRUDWIRE_DONT_DISPLAY</code> variable to the <code>.ENV</code>. This is an array containing the columnnames of the columns you wish not to display. The Default values are <code>["password","remebertoken"]</code>.</p>
    <h2 class="mt-5" id="extending-customizing"> 3 Extending and customizing this package</h2>
    <p>Please note that virtual columns are not supported yet.</p>
    <h4 id="validation"> 3.1 Changing the validation rules</h4>
    <p>When the config file is published, you will find that it contains two arrays with validation rules.</p>
     <ul>
         <li><code>validation_rules_create_new_user</code>: to validate newly created users.</li>
         <li><code><code>validation_rules_update_user</code>: to validate updated user's info.</code></li>
     </ul>
     <p>These arrays <strong>should</strong> be customized to reflect changes made to the <code>$user</code> model or migration. Crudwire is configured to display all fields that are <code>$fillable</code>.</p>
    <h4 id="input-elements"> 3.2 Adding input elements to the <code>create</code> and <code>update</code> view</h4>
    <p>In the config file <code>app/config/crudwire.php</code>, you will find an array <code>crudwire_form_inputs</code>, add the name of your blade components <code>$value</code> with a <code>$key</code> equal to the columnname to this array. An example of an input blade component can be found in <code>resources/views/vendor/crudwire/form/inputs</code>.</p>
    <p> e.g.: Blade component name equal to <code>form.input.name</code> and DB columnname equal to name.</p>
    <pre><code>'crudwire_form_inputs'                  => ['name'    => 'form.inputs.name'],
    </code></pre>
    <h4 id="crudwire-views"> 3.3 Customizing the Crudwire Views</h4>
    <p>To customize the Crudwire Views, you should first publish them. This should be done with the following command.</p>
    <pre><code>php artisan vendor:publish --tag="crudwire.views"
    </code></pre>
    <p>Once you have used the <code>vendor:publish</code> command you will find the views <code>resources/views/vendor/crudwire</code>. When customized Laravel will detect changes and use the customized view automatically.</p>
</div>
