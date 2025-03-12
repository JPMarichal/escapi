<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>ESCAPI API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.1.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.1.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-documentation">
                                <a href="#endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-docs">
                                <a href="#endpoints-GETapi-docs">Handles requests for API documentation and returns the corresponding file content.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-docs-json">
                                <a href="#endpoints-GETapi-docs-json">Handles requests for API documentation and returns the corresponding file content.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-volumenes">
                                <a href="#endpoints-GETapi-volumenes">GET api/volumenes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-volumenes-item">
                                <a href="#endpoints-GETapi-volumenes-item">GET api/volumenes/item</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-volumenes--id-">
                                <a href="#endpoints-GETapi-volumenes--id-">GET api/volumenes/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-volumenes--id--divisiones">
                                <a href="#endpoints-GETapi-volumenes--id--divisiones">GET api/volumenes/{id}/divisiones</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-volumenes--id--libros">
                                <a href="#endpoints-GETapi-volumenes--id--libros">GET api/volumenes/{id}/libros</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-divisiones">
                                <a href="#endpoints-GETapi-divisiones">GET api/divisiones</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-divisiones-item">
                                <a href="#endpoints-GETapi-divisiones-item">GET api/divisiones/item</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-divisiones--id-">
                                <a href="#endpoints-GETapi-divisiones--id-">GET api/divisiones/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-divisiones--id--libros">
                                <a href="#endpoints-GETapi-divisiones--id--libros">GET api/divisiones/{id}/libros</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-divisiones--id--volumen">
                                <a href="#endpoints-GETapi-divisiones--id--volumen">GET api/divisiones/{id}/volumen</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-libros">
                                <a href="#endpoints-GETapi-libros">GET api/libros</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-libros-item">
                                <a href="#endpoints-GETapi-libros-item">GET api/libros/item</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-libros--id-">
                                <a href="#endpoints-GETapi-libros--id-">GET api/libros/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-libros--id--partes">
                                <a href="#endpoints-GETapi-libros--id--partes">GET api/libros/{id}/partes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-libros--id--capitulos">
                                <a href="#endpoints-GETapi-libros--id--capitulos">GET api/libros/{id}/capitulos</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-libros--id--division">
                                <a href="#endpoints-GETapi-libros--id--division">GET api/libros/{id}/division</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-libros--id--volumen">
                                <a href="#endpoints-GETapi-libros--id--volumen">GET api/libros/{id}/volumen</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-partes">
                                <a href="#endpoints-GETapi-partes">GET api/partes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-partes-item">
                                <a href="#endpoints-GETapi-partes-item">GET api/partes/item</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-partes--id-">
                                <a href="#endpoints-GETapi-partes--id-">GET api/partes/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-partes--id--capitulos">
                                <a href="#endpoints-GETapi-partes--id--capitulos">GET api/partes/{id}/capitulos</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-partes--id--libro">
                                <a href="#endpoints-GETapi-partes--id--libro">GET api/partes/{id}/libro</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-capitulos">
                                <a href="#endpoints-GETapi-capitulos">GET api/capitulos</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-capitulos-item">
                                <a href="#endpoints-GETapi-capitulos-item">GET api/capitulos/item</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-capitulos--id-">
                                <a href="#endpoints-GETapi-capitulos--id-">GET api/capitulos/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-capitulos--id--pericopas">
                                <a href="#endpoints-GETapi-capitulos--id--pericopas">GET api/capitulos/{id}/pericopas</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-capitulos--id--versiculos">
                                <a href="#endpoints-GETapi-capitulos--id--versiculos">GET api/capitulos/{id}/versiculos</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-capitulos--id--parte">
                                <a href="#endpoints-GETapi-capitulos--id--parte">GET api/capitulos/{id}/parte</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-capitulos--id--libro">
                                <a href="#endpoints-GETapi-capitulos--id--libro">GET api/capitulos/{id}/libro</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-pericopas">
                                <a href="#endpoints-GETapi-pericopas">GET api/pericopas</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-pericopas-item">
                                <a href="#endpoints-GETapi-pericopas-item">GET api/pericopas/item</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-pericopas--id-">
                                <a href="#endpoints-GETapi-pericopas--id-">GET api/pericopas/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-pericopas--id--versiculos">
                                <a href="#endpoints-GETapi-pericopas--id--versiculos">GET api/pericopas/{id}/versiculos</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-pericopas--id--capitulo">
                                <a href="#endpoints-GETapi-pericopas--id--capitulo">GET api/pericopas/{id}/capitulo</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-versiculos">
                                <a href="#endpoints-GETapi-versiculos">GET api/versiculos</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-versiculos-item">
                                <a href="#endpoints-GETapi-versiculos-item">GET api/versiculos/item</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-versiculos--id-">
                                <a href="#endpoints-GETapi-versiculos--id-">GET api/versiculos/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-versiculos--id--pericopa">
                                <a href="#endpoints-GETapi-versiculos--id--pericopa">GET api/versiculos/{id}/pericopa</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-versiculos--id--capitulo">
                                <a href="#endpoints-GETapi-versiculos--id--capitulo">GET api/versiculos/{id}/capitulo</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: March 12, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</h2>

<p>
</p>



<span id="example-requests-GETapi-documentation">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/documentation"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/documentation"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-documentation">
    </span>
<span id="execution-results-GETapi-documentation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-documentation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-documentation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-documentation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-documentation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-documentation" data-method="GET"
      data-path="api/documentation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-documentation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-documentation"
                    onclick="tryItOut('GETapi-documentation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-documentation"
                    onclick="cancelTryOut('GETapi-documentation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-documentation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/documentation</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-docs">Handles requests for API documentation and returns the corresponding file content.</h2>

<p>
</p>



<span id="example-requests-GETapi-docs">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/docs"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/docs"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-docs">
    </span>
<span id="execution-results-GETapi-docs" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-docs"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-docs"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-docs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-docs">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-docs" data-method="GET"
      data-path="api/docs"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-docs', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-docs"
                    onclick="tryItOut('GETapi-docs');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-docs"
                    onclick="cancelTryOut('GETapi-docs');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-docs"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/docs</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-docs-json">Handles requests for API documentation and returns the corresponding file content.</h2>

<p>
</p>



<span id="example-requests-GETapi-docs-json">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/docs.json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/docs.json"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-docs-json">
    </span>
<span id="execution-results-GETapi-docs-json" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-docs-json"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-docs-json"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-docs-json" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-docs-json">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-docs-json" data-method="GET"
      data-path="api/docs.json"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-docs-json', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-docs-json"
                    onclick="tryItOut('GETapi-docs-json');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-docs-json"
                    onclick="cancelTryOut('GETapi-docs-json');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-docs-json"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/docs.json</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-volumenes">GET api/volumenes</h2>

<p>
</p>



<span id="example-requests-GETapi-volumenes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/volumenes"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/volumenes"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-volumenes">
    </span>
<span id="execution-results-GETapi-volumenes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-volumenes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-volumenes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-volumenes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-volumenes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-volumenes" data-method="GET"
      data-path="api/volumenes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-volumenes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-volumenes"
                    onclick="tryItOut('GETapi-volumenes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-volumenes"
                    onclick="cancelTryOut('GETapi-volumenes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-volumenes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/volumenes</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-volumenes-item">GET api/volumenes/item</h2>

<p>
</p>



<span id="example-requests-GETapi-volumenes-item">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/volumenes/item"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/volumenes/item"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-volumenes-item">
    </span>
<span id="execution-results-GETapi-volumenes-item" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-volumenes-item"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-volumenes-item"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-volumenes-item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-volumenes-item">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-volumenes-item" data-method="GET"
      data-path="api/volumenes/item"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-volumenes-item', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-volumenes-item"
                    onclick="tryItOut('GETapi-volumenes-item');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-volumenes-item"
                    onclick="cancelTryOut('GETapi-volumenes-item');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-volumenes-item"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/volumenes/item</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-volumenes--id-">GET api/volumenes/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-volumenes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/volumenes/architecto"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/volumenes/architecto"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-volumenes--id-">
    </span>
<span id="execution-results-GETapi-volumenes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-volumenes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-volumenes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-volumenes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-volumenes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-volumenes--id-" data-method="GET"
      data-path="api/volumenes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-volumenes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-volumenes--id-"
                    onclick="tryItOut('GETapi-volumenes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-volumenes--id-"
                    onclick="cancelTryOut('GETapi-volumenes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-volumenes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/volumenes/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-volumenes--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the volumene. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-volumenes--id--divisiones">GET api/volumenes/{id}/divisiones</h2>

<p>
</p>



<span id="example-requests-GETapi-volumenes--id--divisiones">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/volumenes/est/divisiones"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/volumenes/est/divisiones"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-volumenes--id--divisiones">
    </span>
<span id="execution-results-GETapi-volumenes--id--divisiones" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-volumenes--id--divisiones"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-volumenes--id--divisiones"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-volumenes--id--divisiones" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-volumenes--id--divisiones">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-volumenes--id--divisiones" data-method="GET"
      data-path="api/volumenes/{id}/divisiones"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-volumenes--id--divisiones', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-volumenes--id--divisiones"
                    onclick="tryItOut('GETapi-volumenes--id--divisiones');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-volumenes--id--divisiones"
                    onclick="cancelTryOut('GETapi-volumenes--id--divisiones');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-volumenes--id--divisiones"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/volumenes/{id}/divisiones</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-volumenes--id--divisiones"
               value="est"
               data-component="url">
    <br>
<p>The ID of the volumene. Example: <code>est</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-volumenes--id--libros">GET api/volumenes/{id}/libros</h2>

<p>
</p>



<span id="example-requests-GETapi-volumenes--id--libros">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/volumenes/dolor/libros"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/volumenes/dolor/libros"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-volumenes--id--libros">
    </span>
<span id="execution-results-GETapi-volumenes--id--libros" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-volumenes--id--libros"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-volumenes--id--libros"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-volumenes--id--libros" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-volumenes--id--libros">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-volumenes--id--libros" data-method="GET"
      data-path="api/volumenes/{id}/libros"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-volumenes--id--libros', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-volumenes--id--libros"
                    onclick="tryItOut('GETapi-volumenes--id--libros');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-volumenes--id--libros"
                    onclick="cancelTryOut('GETapi-volumenes--id--libros');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-volumenes--id--libros"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/volumenes/{id}/libros</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-volumenes--id--libros"
               value="dolor"
               data-component="url">
    <br>
<p>The ID of the volumene. Example: <code>dolor</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-divisiones">GET api/divisiones</h2>

<p>
</p>



<span id="example-requests-GETapi-divisiones">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/divisiones"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/divisiones"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-divisiones">
    </span>
<span id="execution-results-GETapi-divisiones" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-divisiones"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-divisiones"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-divisiones" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-divisiones">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-divisiones" data-method="GET"
      data-path="api/divisiones"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-divisiones', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-divisiones"
                    onclick="tryItOut('GETapi-divisiones');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-divisiones"
                    onclick="cancelTryOut('GETapi-divisiones');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-divisiones"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/divisiones</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-divisiones-item">GET api/divisiones/item</h2>

<p>
</p>



<span id="example-requests-GETapi-divisiones-item">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/divisiones/item"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/divisiones/item"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-divisiones-item">
    </span>
<span id="execution-results-GETapi-divisiones-item" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-divisiones-item"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-divisiones-item"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-divisiones-item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-divisiones-item">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-divisiones-item" data-method="GET"
      data-path="api/divisiones/item"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-divisiones-item', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-divisiones-item"
                    onclick="tryItOut('GETapi-divisiones-item');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-divisiones-item"
                    onclick="cancelTryOut('GETapi-divisiones-item');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-divisiones-item"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/divisiones/item</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-divisiones--id-">GET api/divisiones/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-divisiones--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/divisiones/voluptatum"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/divisiones/voluptatum"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-divisiones--id-">
    </span>
<span id="execution-results-GETapi-divisiones--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-divisiones--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-divisiones--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-divisiones--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-divisiones--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-divisiones--id-" data-method="GET"
      data-path="api/divisiones/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-divisiones--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-divisiones--id-"
                    onclick="tryItOut('GETapi-divisiones--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-divisiones--id-"
                    onclick="cancelTryOut('GETapi-divisiones--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-divisiones--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/divisiones/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-divisiones--id-"
               value="voluptatum"
               data-component="url">
    <br>
<p>The ID of the divisione. Example: <code>voluptatum</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-divisiones--id--libros">GET api/divisiones/{id}/libros</h2>

<p>
</p>



<span id="example-requests-GETapi-divisiones--id--libros">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/divisiones/nam/libros"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/divisiones/nam/libros"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-divisiones--id--libros">
    </span>
<span id="execution-results-GETapi-divisiones--id--libros" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-divisiones--id--libros"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-divisiones--id--libros"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-divisiones--id--libros" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-divisiones--id--libros">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-divisiones--id--libros" data-method="GET"
      data-path="api/divisiones/{id}/libros"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-divisiones--id--libros', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-divisiones--id--libros"
                    onclick="tryItOut('GETapi-divisiones--id--libros');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-divisiones--id--libros"
                    onclick="cancelTryOut('GETapi-divisiones--id--libros');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-divisiones--id--libros"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/divisiones/{id}/libros</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-divisiones--id--libros"
               value="nam"
               data-component="url">
    <br>
<p>The ID of the divisione. Example: <code>nam</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-divisiones--id--volumen">GET api/divisiones/{id}/volumen</h2>

<p>
</p>



<span id="example-requests-GETapi-divisiones--id--volumen">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/divisiones/necessitatibus/volumen"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/divisiones/necessitatibus/volumen"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-divisiones--id--volumen">
    </span>
<span id="execution-results-GETapi-divisiones--id--volumen" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-divisiones--id--volumen"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-divisiones--id--volumen"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-divisiones--id--volumen" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-divisiones--id--volumen">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-divisiones--id--volumen" data-method="GET"
      data-path="api/divisiones/{id}/volumen"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-divisiones--id--volumen', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-divisiones--id--volumen"
                    onclick="tryItOut('GETapi-divisiones--id--volumen');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-divisiones--id--volumen"
                    onclick="cancelTryOut('GETapi-divisiones--id--volumen');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-divisiones--id--volumen"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/divisiones/{id}/volumen</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-divisiones--id--volumen"
               value="necessitatibus"
               data-component="url">
    <br>
<p>The ID of the divisione. Example: <code>necessitatibus</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-libros">GET api/libros</h2>

<p>
</p>



<span id="example-requests-GETapi-libros">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/libros"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/libros"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-libros">
    </span>
<span id="execution-results-GETapi-libros" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-libros"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-libros"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-libros" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-libros">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-libros" data-method="GET"
      data-path="api/libros"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-libros', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-libros"
                    onclick="tryItOut('GETapi-libros');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-libros"
                    onclick="cancelTryOut('GETapi-libros');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-libros"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/libros</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-libros-item">GET api/libros/item</h2>

<p>
</p>



<span id="example-requests-GETapi-libros-item">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/libros/item"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/libros/item"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-libros-item">
    </span>
<span id="execution-results-GETapi-libros-item" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-libros-item"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-libros-item"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-libros-item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-libros-item">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-libros-item" data-method="GET"
      data-path="api/libros/item"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-libros-item', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-libros-item"
                    onclick="tryItOut('GETapi-libros-item');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-libros-item"
                    onclick="cancelTryOut('GETapi-libros-item');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-libros-item"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/libros/item</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-libros--id-">GET api/libros/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-libros--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/libros/reiciendis"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/libros/reiciendis"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-libros--id-">
    </span>
<span id="execution-results-GETapi-libros--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-libros--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-libros--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-libros--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-libros--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-libros--id-" data-method="GET"
      data-path="api/libros/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-libros--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-libros--id-"
                    onclick="tryItOut('GETapi-libros--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-libros--id-"
                    onclick="cancelTryOut('GETapi-libros--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-libros--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/libros/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-libros--id-"
               value="reiciendis"
               data-component="url">
    <br>
<p>The ID of the libro. Example: <code>reiciendis</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-libros--id--partes">GET api/libros/{id}/partes</h2>

<p>
</p>



<span id="example-requests-GETapi-libros--id--partes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/libros/dolores/partes"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/libros/dolores/partes"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-libros--id--partes">
    </span>
<span id="execution-results-GETapi-libros--id--partes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-libros--id--partes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-libros--id--partes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-libros--id--partes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-libros--id--partes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-libros--id--partes" data-method="GET"
      data-path="api/libros/{id}/partes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-libros--id--partes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-libros--id--partes"
                    onclick="tryItOut('GETapi-libros--id--partes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-libros--id--partes"
                    onclick="cancelTryOut('GETapi-libros--id--partes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-libros--id--partes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/libros/{id}/partes</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-libros--id--partes"
               value="dolores"
               data-component="url">
    <br>
<p>The ID of the libro. Example: <code>dolores</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-libros--id--capitulos">GET api/libros/{id}/capitulos</h2>

<p>
</p>



<span id="example-requests-GETapi-libros--id--capitulos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/libros/ut/capitulos"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/libros/ut/capitulos"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-libros--id--capitulos">
    </span>
<span id="execution-results-GETapi-libros--id--capitulos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-libros--id--capitulos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-libros--id--capitulos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-libros--id--capitulos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-libros--id--capitulos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-libros--id--capitulos" data-method="GET"
      data-path="api/libros/{id}/capitulos"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-libros--id--capitulos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-libros--id--capitulos"
                    onclick="tryItOut('GETapi-libros--id--capitulos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-libros--id--capitulos"
                    onclick="cancelTryOut('GETapi-libros--id--capitulos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-libros--id--capitulos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/libros/{id}/capitulos</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-libros--id--capitulos"
               value="ut"
               data-component="url">
    <br>
<p>The ID of the libro. Example: <code>ut</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-libros--id--division">GET api/libros/{id}/division</h2>

<p>
</p>



<span id="example-requests-GETapi-libros--id--division">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/libros/unde/division"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/libros/unde/division"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-libros--id--division">
    </span>
<span id="execution-results-GETapi-libros--id--division" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-libros--id--division"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-libros--id--division"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-libros--id--division" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-libros--id--division">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-libros--id--division" data-method="GET"
      data-path="api/libros/{id}/division"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-libros--id--division', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-libros--id--division"
                    onclick="tryItOut('GETapi-libros--id--division');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-libros--id--division"
                    onclick="cancelTryOut('GETapi-libros--id--division');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-libros--id--division"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/libros/{id}/division</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-libros--id--division"
               value="unde"
               data-component="url">
    <br>
<p>The ID of the libro. Example: <code>unde</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-libros--id--volumen">GET api/libros/{id}/volumen</h2>

<p>
</p>



<span id="example-requests-GETapi-libros--id--volumen">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/libros/odio/volumen"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/libros/odio/volumen"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-libros--id--volumen">
    </span>
<span id="execution-results-GETapi-libros--id--volumen" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-libros--id--volumen"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-libros--id--volumen"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-libros--id--volumen" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-libros--id--volumen">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-libros--id--volumen" data-method="GET"
      data-path="api/libros/{id}/volumen"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-libros--id--volumen', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-libros--id--volumen"
                    onclick="tryItOut('GETapi-libros--id--volumen');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-libros--id--volumen"
                    onclick="cancelTryOut('GETapi-libros--id--volumen');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-libros--id--volumen"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/libros/{id}/volumen</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-libros--id--volumen"
               value="odio"
               data-component="url">
    <br>
<p>The ID of the libro. Example: <code>odio</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-partes">GET api/partes</h2>

<p>
</p>



<span id="example-requests-GETapi-partes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/partes"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/partes"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-partes">
    </span>
<span id="execution-results-GETapi-partes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-partes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-partes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-partes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-partes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-partes" data-method="GET"
      data-path="api/partes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-partes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-partes"
                    onclick="tryItOut('GETapi-partes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-partes"
                    onclick="cancelTryOut('GETapi-partes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-partes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/partes</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-partes-item">GET api/partes/item</h2>

<p>
</p>



<span id="example-requests-GETapi-partes-item">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/partes/item"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/partes/item"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-partes-item">
    </span>
<span id="execution-results-GETapi-partes-item" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-partes-item"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-partes-item"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-partes-item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-partes-item">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-partes-item" data-method="GET"
      data-path="api/partes/item"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-partes-item', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-partes-item"
                    onclick="tryItOut('GETapi-partes-item');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-partes-item"
                    onclick="cancelTryOut('GETapi-partes-item');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-partes-item"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/partes/item</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-partes--id-">GET api/partes/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-partes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/partes/autem"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/partes/autem"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-partes--id-">
    </span>
<span id="execution-results-GETapi-partes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-partes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-partes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-partes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-partes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-partes--id-" data-method="GET"
      data-path="api/partes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-partes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-partes--id-"
                    onclick="tryItOut('GETapi-partes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-partes--id-"
                    onclick="cancelTryOut('GETapi-partes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-partes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/partes/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-partes--id-"
               value="autem"
               data-component="url">
    <br>
<p>The ID of the parte. Example: <code>autem</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-partes--id--capitulos">GET api/partes/{id}/capitulos</h2>

<p>
</p>



<span id="example-requests-GETapi-partes--id--capitulos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/partes/totam/capitulos"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/partes/totam/capitulos"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-partes--id--capitulos">
    </span>
<span id="execution-results-GETapi-partes--id--capitulos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-partes--id--capitulos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-partes--id--capitulos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-partes--id--capitulos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-partes--id--capitulos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-partes--id--capitulos" data-method="GET"
      data-path="api/partes/{id}/capitulos"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-partes--id--capitulos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-partes--id--capitulos"
                    onclick="tryItOut('GETapi-partes--id--capitulos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-partes--id--capitulos"
                    onclick="cancelTryOut('GETapi-partes--id--capitulos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-partes--id--capitulos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/partes/{id}/capitulos</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-partes--id--capitulos"
               value="totam"
               data-component="url">
    <br>
<p>The ID of the parte. Example: <code>totam</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-partes--id--libro">GET api/partes/{id}/libro</h2>

<p>
</p>



<span id="example-requests-GETapi-partes--id--libro">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/partes/ea/libro"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/partes/ea/libro"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-partes--id--libro">
    </span>
<span id="execution-results-GETapi-partes--id--libro" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-partes--id--libro"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-partes--id--libro"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-partes--id--libro" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-partes--id--libro">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-partes--id--libro" data-method="GET"
      data-path="api/partes/{id}/libro"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-partes--id--libro', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-partes--id--libro"
                    onclick="tryItOut('GETapi-partes--id--libro');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-partes--id--libro"
                    onclick="cancelTryOut('GETapi-partes--id--libro');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-partes--id--libro"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/partes/{id}/libro</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-partes--id--libro"
               value="ea"
               data-component="url">
    <br>
<p>The ID of the parte. Example: <code>ea</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-capitulos">GET api/capitulos</h2>

<p>
</p>



<span id="example-requests-GETapi-capitulos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/capitulos"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/capitulos"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-capitulos">
    </span>
<span id="execution-results-GETapi-capitulos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-capitulos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-capitulos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-capitulos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-capitulos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-capitulos" data-method="GET"
      data-path="api/capitulos"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-capitulos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-capitulos"
                    onclick="tryItOut('GETapi-capitulos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-capitulos"
                    onclick="cancelTryOut('GETapi-capitulos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-capitulos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/capitulos</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-capitulos-item">GET api/capitulos/item</h2>

<p>
</p>



<span id="example-requests-GETapi-capitulos-item">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/capitulos/item"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/capitulos/item"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-capitulos-item">
    </span>
<span id="execution-results-GETapi-capitulos-item" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-capitulos-item"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-capitulos-item"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-capitulos-item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-capitulos-item">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-capitulos-item" data-method="GET"
      data-path="api/capitulos/item"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-capitulos-item', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-capitulos-item"
                    onclick="tryItOut('GETapi-capitulos-item');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-capitulos-item"
                    onclick="cancelTryOut('GETapi-capitulos-item');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-capitulos-item"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/capitulos/item</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-capitulos--id-">GET api/capitulos/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-capitulos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/capitulos/sed"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/capitulos/sed"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-capitulos--id-">
    </span>
<span id="execution-results-GETapi-capitulos--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-capitulos--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-capitulos--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-capitulos--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-capitulos--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-capitulos--id-" data-method="GET"
      data-path="api/capitulos/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-capitulos--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-capitulos--id-"
                    onclick="tryItOut('GETapi-capitulos--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-capitulos--id-"
                    onclick="cancelTryOut('GETapi-capitulos--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-capitulos--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/capitulos/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-capitulos--id-"
               value="sed"
               data-component="url">
    <br>
<p>The ID of the capitulo. Example: <code>sed</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-capitulos--id--pericopas">GET api/capitulos/{id}/pericopas</h2>

<p>
</p>



<span id="example-requests-GETapi-capitulos--id--pericopas">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/capitulos/reiciendis/pericopas"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/capitulos/reiciendis/pericopas"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-capitulos--id--pericopas">
    </span>
<span id="execution-results-GETapi-capitulos--id--pericopas" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-capitulos--id--pericopas"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-capitulos--id--pericopas"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-capitulos--id--pericopas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-capitulos--id--pericopas">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-capitulos--id--pericopas" data-method="GET"
      data-path="api/capitulos/{id}/pericopas"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-capitulos--id--pericopas', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-capitulos--id--pericopas"
                    onclick="tryItOut('GETapi-capitulos--id--pericopas');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-capitulos--id--pericopas"
                    onclick="cancelTryOut('GETapi-capitulos--id--pericopas');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-capitulos--id--pericopas"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/capitulos/{id}/pericopas</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-capitulos--id--pericopas"
               value="reiciendis"
               data-component="url">
    <br>
<p>The ID of the capitulo. Example: <code>reiciendis</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-capitulos--id--versiculos">GET api/capitulos/{id}/versiculos</h2>

<p>
</p>



<span id="example-requests-GETapi-capitulos--id--versiculos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/capitulos/velit/versiculos"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/capitulos/velit/versiculos"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-capitulos--id--versiculos">
    </span>
<span id="execution-results-GETapi-capitulos--id--versiculos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-capitulos--id--versiculos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-capitulos--id--versiculos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-capitulos--id--versiculos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-capitulos--id--versiculos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-capitulos--id--versiculos" data-method="GET"
      data-path="api/capitulos/{id}/versiculos"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-capitulos--id--versiculos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-capitulos--id--versiculos"
                    onclick="tryItOut('GETapi-capitulos--id--versiculos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-capitulos--id--versiculos"
                    onclick="cancelTryOut('GETapi-capitulos--id--versiculos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-capitulos--id--versiculos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/capitulos/{id}/versiculos</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-capitulos--id--versiculos"
               value="velit"
               data-component="url">
    <br>
<p>The ID of the capitulo. Example: <code>velit</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-capitulos--id--parte">GET api/capitulos/{id}/parte</h2>

<p>
</p>



<span id="example-requests-GETapi-capitulos--id--parte">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/capitulos/delectus/parte"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/capitulos/delectus/parte"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-capitulos--id--parte">
    </span>
<span id="execution-results-GETapi-capitulos--id--parte" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-capitulos--id--parte"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-capitulos--id--parte"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-capitulos--id--parte" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-capitulos--id--parte">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-capitulos--id--parte" data-method="GET"
      data-path="api/capitulos/{id}/parte"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-capitulos--id--parte', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-capitulos--id--parte"
                    onclick="tryItOut('GETapi-capitulos--id--parte');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-capitulos--id--parte"
                    onclick="cancelTryOut('GETapi-capitulos--id--parte');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-capitulos--id--parte"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/capitulos/{id}/parte</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-capitulos--id--parte"
               value="delectus"
               data-component="url">
    <br>
<p>The ID of the capitulo. Example: <code>delectus</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-capitulos--id--libro">GET api/capitulos/{id}/libro</h2>

<p>
</p>



<span id="example-requests-GETapi-capitulos--id--libro">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/capitulos/voluptatem/libro"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/capitulos/voluptatem/libro"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-capitulos--id--libro">
    </span>
<span id="execution-results-GETapi-capitulos--id--libro" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-capitulos--id--libro"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-capitulos--id--libro"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-capitulos--id--libro" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-capitulos--id--libro">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-capitulos--id--libro" data-method="GET"
      data-path="api/capitulos/{id}/libro"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-capitulos--id--libro', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-capitulos--id--libro"
                    onclick="tryItOut('GETapi-capitulos--id--libro');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-capitulos--id--libro"
                    onclick="cancelTryOut('GETapi-capitulos--id--libro');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-capitulos--id--libro"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/capitulos/{id}/libro</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-capitulos--id--libro"
               value="voluptatem"
               data-component="url">
    <br>
<p>The ID of the capitulo. Example: <code>voluptatem</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-pericopas">GET api/pericopas</h2>

<p>
</p>



<span id="example-requests-GETapi-pericopas">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pericopas"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pericopas"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pericopas">
    </span>
<span id="execution-results-GETapi-pericopas" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pericopas"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pericopas"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-pericopas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pericopas">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-pericopas" data-method="GET"
      data-path="api/pericopas"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pericopas', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pericopas"
                    onclick="tryItOut('GETapi-pericopas');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pericopas"
                    onclick="cancelTryOut('GETapi-pericopas');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pericopas"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pericopas</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-pericopas-item">GET api/pericopas/item</h2>

<p>
</p>



<span id="example-requests-GETapi-pericopas-item">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pericopas/item"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pericopas/item"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pericopas-item">
    </span>
<span id="execution-results-GETapi-pericopas-item" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pericopas-item"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pericopas-item"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-pericopas-item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pericopas-item">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-pericopas-item" data-method="GET"
      data-path="api/pericopas/item"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pericopas-item', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pericopas-item"
                    onclick="tryItOut('GETapi-pericopas-item');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pericopas-item"
                    onclick="cancelTryOut('GETapi-pericopas-item');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pericopas-item"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pericopas/item</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-pericopas--id-">GET api/pericopas/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-pericopas--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pericopas/velit"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pericopas/velit"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pericopas--id-">
    </span>
<span id="execution-results-GETapi-pericopas--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pericopas--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pericopas--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-pericopas--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pericopas--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-pericopas--id-" data-method="GET"
      data-path="api/pericopas/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pericopas--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pericopas--id-"
                    onclick="tryItOut('GETapi-pericopas--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pericopas--id-"
                    onclick="cancelTryOut('GETapi-pericopas--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pericopas--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pericopas/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-pericopas--id-"
               value="velit"
               data-component="url">
    <br>
<p>The ID of the pericopa. Example: <code>velit</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-pericopas--id--versiculos">GET api/pericopas/{id}/versiculos</h2>

<p>
</p>



<span id="example-requests-GETapi-pericopas--id--versiculos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pericopas/blanditiis/versiculos"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pericopas/blanditiis/versiculos"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pericopas--id--versiculos">
    </span>
<span id="execution-results-GETapi-pericopas--id--versiculos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pericopas--id--versiculos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pericopas--id--versiculos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-pericopas--id--versiculos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pericopas--id--versiculos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-pericopas--id--versiculos" data-method="GET"
      data-path="api/pericopas/{id}/versiculos"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pericopas--id--versiculos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pericopas--id--versiculos"
                    onclick="tryItOut('GETapi-pericopas--id--versiculos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pericopas--id--versiculos"
                    onclick="cancelTryOut('GETapi-pericopas--id--versiculos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pericopas--id--versiculos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pericopas/{id}/versiculos</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-pericopas--id--versiculos"
               value="blanditiis"
               data-component="url">
    <br>
<p>The ID of the pericopa. Example: <code>blanditiis</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-pericopas--id--capitulo">GET api/pericopas/{id}/capitulo</h2>

<p>
</p>



<span id="example-requests-GETapi-pericopas--id--capitulo">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pericopas/eum/capitulo"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pericopas/eum/capitulo"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pericopas--id--capitulo">
    </span>
<span id="execution-results-GETapi-pericopas--id--capitulo" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pericopas--id--capitulo"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pericopas--id--capitulo"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-pericopas--id--capitulo" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pericopas--id--capitulo">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-pericopas--id--capitulo" data-method="GET"
      data-path="api/pericopas/{id}/capitulo"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pericopas--id--capitulo', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pericopas--id--capitulo"
                    onclick="tryItOut('GETapi-pericopas--id--capitulo');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pericopas--id--capitulo"
                    onclick="cancelTryOut('GETapi-pericopas--id--capitulo');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pericopas--id--capitulo"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pericopas/{id}/capitulo</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-pericopas--id--capitulo"
               value="eum"
               data-component="url">
    <br>
<p>The ID of the pericopa. Example: <code>eum</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-versiculos">GET api/versiculos</h2>

<p>
</p>



<span id="example-requests-GETapi-versiculos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/versiculos"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versiculos"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-versiculos">
    </span>
<span id="execution-results-GETapi-versiculos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-versiculos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-versiculos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-versiculos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-versiculos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-versiculos" data-method="GET"
      data-path="api/versiculos"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-versiculos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-versiculos"
                    onclick="tryItOut('GETapi-versiculos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-versiculos"
                    onclick="cancelTryOut('GETapi-versiculos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-versiculos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/versiculos</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-versiculos-item">GET api/versiculos/item</h2>

<p>
</p>



<span id="example-requests-GETapi-versiculos-item">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/versiculos/item"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versiculos/item"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-versiculos-item">
    </span>
<span id="execution-results-GETapi-versiculos-item" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-versiculos-item"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-versiculos-item"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-versiculos-item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-versiculos-item">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-versiculos-item" data-method="GET"
      data-path="api/versiculos/item"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-versiculos-item', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-versiculos-item"
                    onclick="tryItOut('GETapi-versiculos-item');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-versiculos-item"
                    onclick="cancelTryOut('GETapi-versiculos-item');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-versiculos-item"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/versiculos/item</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-versiculos--id-">GET api/versiculos/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-versiculos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/versiculos/deserunt"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versiculos/deserunt"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-versiculos--id-">
    </span>
<span id="execution-results-GETapi-versiculos--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-versiculos--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-versiculos--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-versiculos--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-versiculos--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-versiculos--id-" data-method="GET"
      data-path="api/versiculos/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-versiculos--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-versiculos--id-"
                    onclick="tryItOut('GETapi-versiculos--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-versiculos--id-"
                    onclick="cancelTryOut('GETapi-versiculos--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-versiculos--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/versiculos/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-versiculos--id-"
               value="deserunt"
               data-component="url">
    <br>
<p>The ID of the versiculo. Example: <code>deserunt</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-versiculos--id--pericopa">GET api/versiculos/{id}/pericopa</h2>

<p>
</p>



<span id="example-requests-GETapi-versiculos--id--pericopa">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/versiculos/beatae/pericopa"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versiculos/beatae/pericopa"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-versiculos--id--pericopa">
    </span>
<span id="execution-results-GETapi-versiculos--id--pericopa" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-versiculos--id--pericopa"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-versiculos--id--pericopa"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-versiculos--id--pericopa" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-versiculos--id--pericopa">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-versiculos--id--pericopa" data-method="GET"
      data-path="api/versiculos/{id}/pericopa"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-versiculos--id--pericopa', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-versiculos--id--pericopa"
                    onclick="tryItOut('GETapi-versiculos--id--pericopa');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-versiculos--id--pericopa"
                    onclick="cancelTryOut('GETapi-versiculos--id--pericopa');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-versiculos--id--pericopa"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/versiculos/{id}/pericopa</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-versiculos--id--pericopa"
               value="beatae"
               data-component="url">
    <br>
<p>The ID of the versiculo. Example: <code>beatae</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-versiculos--id--capitulo">GET api/versiculos/{id}/capitulo</h2>

<p>
</p>



<span id="example-requests-GETapi-versiculos--id--capitulo">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/versiculos/quidem/capitulo"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versiculos/quidem/capitulo"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-versiculos--id--capitulo">
    </span>
<span id="execution-results-GETapi-versiculos--id--capitulo" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-versiculos--id--capitulo"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-versiculos--id--capitulo"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-versiculos--id--capitulo" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-versiculos--id--capitulo">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-versiculos--id--capitulo" data-method="GET"
      data-path="api/versiculos/{id}/capitulo"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-versiculos--id--capitulo', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-versiculos--id--capitulo"
                    onclick="tryItOut('GETapi-versiculos--id--capitulo');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-versiculos--id--capitulo"
                    onclick="cancelTryOut('GETapi-versiculos--id--capitulo');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-versiculos--id--capitulo"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/versiculos/{id}/capitulo</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-versiculos--id--capitulo"
               value="quidem"
               data-component="url">
    <br>
<p>The ID of the versiculo. Example: <code>quidem</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
