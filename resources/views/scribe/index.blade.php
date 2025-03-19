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
                    <ul id="tocify-header-capitulos" class="tocify-header">
                <li class="tocify-item level-1" data-unique="capitulos">
                    <a href="#capitulos">Capitulos</a>
                </li>
                                    <ul id="tocify-subheader-capitulos" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="capitulos-GETapi-capitulos">
                                <a href="#capitulos-GETapi-capitulos">Lista todos los capítulos.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="capitulos-GETapi-capitulos--id-">
                                <a href="#capitulos-GETapi-capitulos--id-">Obtiene un capítulo específico por ID.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="capitulos-GETapi-capitulos--referencia-">
                                <a href="#capitulos-GETapi-capitulos--referencia-">Busca un capítulo por su referencia.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="capitulos-GETapi-capitulos--id--pericopas">
                                <a href="#capitulos-GETapi-capitulos--id--pericopas">Lista todas las perícopas de un capítulo.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="capitulos-GETapi-capitulos--id--versiculos">
                                <a href="#capitulos-GETapi-capitulos--id--versiculos">Lista todos los versículos de un capítulo.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="capitulos-GETapi-capitulos--id--parte">
                                <a href="#capitulos-GETapi-capitulos--id--parte">Obtiene la parte a la que pertenece el capítulo, si existe.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="capitulos-GETapi-capitulos--id--libro">
                                <a href="#capitulos-GETapi-capitulos--id--libro">Obtiene el libro al que pertenece el capítulo.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-divisiones" class="tocify-header">
                <li class="tocify-item level-1" data-unique="divisiones">
                    <a href="#divisiones">Divisiones</a>
                </li>
                                    <ul id="tocify-subheader-divisiones" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="divisiones-GETapi-divisiones">
                                <a href="#divisiones-GETapi-divisiones">Lista todas las divisiones.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="divisiones-GETapi-divisiones--id-">
                                <a href="#divisiones-GETapi-divisiones--id-">Obtiene una división específica por ID.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="divisiones-GETapi-divisiones--nombre-">
                                <a href="#divisiones-GETapi-divisiones--nombre-">Busca una división por nombre.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="divisiones-GETapi-divisiones--id--libros">
                                <a href="#divisiones-GETapi-divisiones--id--libros">Lista todos los libros de una división.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="divisiones-GETapi-divisiones--id--volumen">
                                <a href="#divisiones-GETapi-divisiones--id--volumen">Obtiene el volumen al que pertenece la división.</a>
                            </li>
                                                                        </ul>
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
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-audio--libro---capitulo-">
                                <a href="#endpoints-GETapi-audio--libro---capitulo-">GET api/audio/{libro}/{capitulo}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-libros" class="tocify-header">
                <li class="tocify-item level-1" data-unique="libros">
                    <a href="#libros">Libros</a>
                </li>
                                    <ul id="tocify-subheader-libros" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="libros-GETapi-libros">
                                <a href="#libros-GETapi-libros">Lista todos los libros.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="libros-GETapi-libros--id-">
                                <a href="#libros-GETapi-libros--id-">Obtiene un libro específico por ID.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="libros-GETapi-libros--nombre-">
                                <a href="#libros-GETapi-libros--nombre-">Busca un libro por nombre.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="libros-GETapi-libros--id--partes">
                                <a href="#libros-GETapi-libros--id--partes">Lista todas las partes de un libro.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="libros-GETapi-libros--id--capitulos">
                                <a href="#libros-GETapi-libros--id--capitulos">Lista todos los capítulos de un libro.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="libros-GETapi-libros--id--division">
                                <a href="#libros-GETapi-libros--id--division">Obtiene la división a la que pertenece el libro.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="libros-GETapi-libros--id--volumen">
                                <a href="#libros-GETapi-libros--id--volumen">Obtiene el volumen al que pertenece el libro.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-partes" class="tocify-header">
                <li class="tocify-item level-1" data-unique="partes">
                    <a href="#partes">Partes</a>
                </li>
                                    <ul id="tocify-subheader-partes" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="partes-GETapi-partes">
                                <a href="#partes-GETapi-partes">Lista todas las partes.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="partes-GETapi-partes-item">
                                <a href="#partes-GETapi-partes-item">Busca una parte por nombre.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="partes-GETapi-partes--id-">
                                <a href="#partes-GETapi-partes--id-">Obtiene una parte específica por ID.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="partes-GETapi-partes--id--capitulos">
                                <a href="#partes-GETapi-partes--id--capitulos">Lista todos los capítulos de una parte.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="partes-GETapi-partes--id--libro">
                                <a href="#partes-GETapi-partes--id--libro">Obtiene el libro al que pertenece la parte.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-pericopas" class="tocify-header">
                <li class="tocify-item level-1" data-unique="pericopas">
                    <a href="#pericopas">Pericopas</a>
                </li>
                                    <ul id="tocify-subheader-pericopas" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="pericopas-GETapi-pericopas">
                                <a href="#pericopas-GETapi-pericopas">Lista todas las pericopas.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="pericopas-GETapi-pericopas-item">
                                <a href="#pericopas-GETapi-pericopas-item">Busca una pericopa por título.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="pericopas-GETapi-pericopas--id-">
                                <a href="#pericopas-GETapi-pericopas--id-">Obtiene una pericopa específica por ID.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="pericopas-GETapi-pericopas--id--versiculos">
                                <a href="#pericopas-GETapi-pericopas--id--versiculos">Lista todos los versículos de una pericopa.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="pericopas-GETapi-pericopas--id--capitulo">
                                <a href="#pericopas-GETapi-pericopas--id--capitulo">Obtiene el capítulo al que pertenece la pericopa.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-versiculos" class="tocify-header">
                <li class="tocify-item level-1" data-unique="versiculos">
                    <a href="#versiculos">Versiculos</a>
                </li>
                                    <ul id="tocify-subheader-versiculos" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="versiculos-GETapi-versiculos">
                                <a href="#versiculos-GETapi-versiculos">Lista todos los versículos.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="versiculos-GETapi-versiculos-item">
                                <a href="#versiculos-GETapi-versiculos-item">Busca un versículo por su referencia.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="versiculos-GETapi-versiculos-pasaje">
                                <a href="#versiculos-GETapi-versiculos-pasaje">Busca versículos por referencia completa.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="versiculos-GETapi-versiculos--id-">
                                <a href="#versiculos-GETapi-versiculos--id-">Obtiene un versículo específico.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="versiculos-GETapi-versiculos--id--pericopa">
                                <a href="#versiculos-GETapi-versiculos--id--pericopa">Obtiene la perícopa a la que pertenece el versículo.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="versiculos-GETapi-versiculos--id--capitulo">
                                <a href="#versiculos-GETapi-versiculos--id--capitulo">Obtiene el capítulo al que pertenece el versículo.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-volumenes" class="tocify-header">
                <li class="tocify-item level-1" data-unique="volumenes">
                    <a href="#volumenes">Volúmenes</a>
                </li>
                                    <ul id="tocify-subheader-volumenes" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="volumenes-GETapi-volumenes">
                                <a href="#volumenes-GETapi-volumenes">Lista todos los volúmenes.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="volumenes-GETapi-volumenes--id-">
                                <a href="#volumenes-GETapi-volumenes--id-">Obtiene un volumen específico por ID.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="volumenes-GETapi-volumenes--nombre-">
                                <a href="#volumenes-GETapi-volumenes--nombre-">Busca un volumen por nombre.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="volumenes-GETapi-volumenes--id--divisiones">
                                <a href="#volumenes-GETapi-volumenes--id--divisiones">Lista todas las divisiones de un volumen.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="volumenes-GETapi-volumenes--id--libros">
                                <a href="#volumenes-GETapi-volumenes--id--libros">Lista todos los libros de un volumen.</a>
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
        <li>Last updated: March 19, 2025</li>
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

        <h1 id="capitulos">Capitulos</h1>

    

                                <h2 id="capitulos-GETapi-capitulos">Lista todos los capítulos.</h2>

<p>
</p>

<p>Retorna una colección de todos los capítulos disponibles en el sistema.
Los capítulos son las divisiones principales de los libros de las escrituras.</p>

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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nombre&quot;: &quot;Cap&iacute;tulo 1&quot;,
            &quot;num_capitulo&quot;: 1,
            &quot;orden&quot;: 1,
            &quot;libro_id&quot;: 1,
            &quot;parte_id&quot;: null
        }
    ]
}</code>
 </pre>
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

                    <h2 id="capitulos-GETapi-capitulos--id-">Obtiene un capítulo específico por ID.</h2>

<p>
</p>



<span id="example-requests-GETapi-capitulos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/capitulos/quis"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/capitulos/quis"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-capitulos--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Cap&iacute;tulo 1&quot;,
        &quot;num_capitulo&quot;: 1,
        &quot;orden&quot;: 1,
        &quot;libro_id&quot;: 1,
        &quot;parte_id&quot;: null
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Capítulo no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del capítulo</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-capitulos--id-"
               value="quis"
               data-component="url">
    <br>
<p>Example: <code>quis</code></p>
            </div>
                    </form>

                    <h2 id="capitulos-GETapi-capitulos--referencia-">Busca un capítulo por su referencia.</h2>

<p>
</p>

<p>La búsqueda es insensible a mayúsculas/minúsculas y acentos.
La referencia debe incluir el nombre del libro (o su abreviatura) y el número de capítulo.
Ejemplos válidos:</p>
<ul>
<li>'Génesis 1'</li>
<li>'GEN 1'</li>
<li>'José Smith-Historia 1'</li>
</ul>

<span id="example-requests-GETapi-capitulos--referencia-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/capitulos/Génesis 1"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/capitulos/Génesis 1"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-capitulos--referencia-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Cap&iacute;tulo 1&quot;,
        &quot;num_capitulo&quot;: 1,
        &quot;orden&quot;: 1,
        &quot;libro_id&quot;: 1,
        &quot;parte_id&quot;: null
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Capítulo no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-capitulos--referencia-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-capitulos--referencia-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-capitulos--referencia-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-capitulos--referencia-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-capitulos--referencia-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-capitulos--referencia-" data-method="GET"
      data-path="api/capitulos/{referencia}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-capitulos--referencia-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-capitulos--referencia-"
                    onclick="tryItOut('GETapi-capitulos--referencia-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-capitulos--referencia-"
                    onclick="cancelTryOut('GETapi-capitulos--referencia-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-capitulos--referencia-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/capitulos/{referencia}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>referencia</code></b>&nbsp;&nbsp;
<small>Referencia del capítulo</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="referencia"                data-endpoint="GETapi-capitulos--referencia-"
               value="Génesis 1"
               data-component="url">
    <br>
<p>Example: <code>Génesis 1</code></p>
            </div>
                    </form>

                    <h2 id="capitulos-GETapi-capitulos--id--pericopas">Lista todas las perícopas de un capítulo.</h2>

<p>
</p>



<span id="example-requests-GETapi-capitulos--id--pericopas">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/capitulos/consectetur/pericopas"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/capitulos/consectetur/pericopas"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-capitulos--id--pericopas">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;titulo&quot;: &quot;La Creaci&oacute;n&quot;,
            &quot;versiculo_inicio&quot;: 1,
            &quot;versiculo_fin&quot;: 31,
            &quot;capitulo_id&quot;: 1
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Capítulo no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del capítulo</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-capitulos--id--pericopas"
               value="consectetur"
               data-component="url">
    <br>
<p>Example: <code>consectetur</code></p>
            </div>
                    </form>

                    <h2 id="capitulos-GETapi-capitulos--id--versiculos">Lista todos los versículos de un capítulo.</h2>

<p>
</p>



<span id="example-requests-GETapi-capitulos--id--versiculos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/capitulos/nobis/versiculos"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/capitulos/nobis/versiculos"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-capitulos--id--versiculos">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;num_versiculo&quot;: 1,
            &quot;contenido&quot;: &quot;En el principio cre&oacute; Dios los cielos y la tierra.&quot;,
            &quot;capitulo_id&quot;: 1
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Capítulo no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del capítulo</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-capitulos--id--versiculos"
               value="nobis"
               data-component="url">
    <br>
<p>Example: <code>nobis</code></p>
            </div>
                    </form>

                    <h2 id="capitulos-GETapi-capitulos--id--parte">Obtiene la parte a la que pertenece el capítulo, si existe.</h2>

<p>
</p>



<span id="example-requests-GETapi-capitulos--id--parte">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/capitulos/numquam/parte"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/capitulos/numquam/parte"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-capitulos--id--parte">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Parte 1&quot;,
        &quot;orden&quot;: 1,
        &quot;libro_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Capítulo no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del capítulo</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-capitulos--id--parte"
               value="numquam"
               data-component="url">
    <br>
<p>Example: <code>numquam</code></p>
            </div>
                    </form>

                    <h2 id="capitulos-GETapi-capitulos--id--libro">Obtiene el libro al que pertenece el capítulo.</h2>

<p>
</p>



<span id="example-requests-GETapi-capitulos--id--libro">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/capitulos/quia/libro"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/capitulos/quia/libro"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-capitulos--id--libro">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;G&eacute;nesis&quot;,
        &quot;abreviatura&quot;: &quot;GEN&quot;,
        &quot;division_id&quot;: 1,
        &quot;volumen_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Capítulo no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del capítulo</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-capitulos--id--libro"
               value="quia"
               data-component="url">
    <br>
<p>Example: <code>quia</code></p>
            </div>
                    </form>

                <h1 id="divisiones">Divisiones</h1>

    

                                <h2 id="divisiones-GETapi-divisiones">Lista todas las divisiones.</h2>

<p>
</p>

<p>Retorna una colección de todas las divisiones disponibles en el sistema.
Las divisiones son agrupaciones de libros dentro de un volumen (ej: Pentateuco, Libros Históricos).</p>

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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nombre&quot;: &quot;Pentateuco&quot;,
            &quot;volumen_id&quot;: 1
        },
        {
            &quot;id&quot;: 2,
            &quot;nombre&quot;: &quot;Libros Hist&oacute;ricos&quot;,
            &quot;volumen_id&quot;: 1
        }
    ]
}</code>
 </pre>
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

                    <h2 id="divisiones-GETapi-divisiones--id-">Obtiene una división específica por ID.</h2>

<p>
</p>



<span id="example-requests-GETapi-divisiones--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/divisiones/quam"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/divisiones/quam"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-divisiones--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Pentateuco&quot;,
        &quot;volumen_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, División no encontrada):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID de la división</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-divisiones--id-"
               value="quam"
               data-component="url">
    <br>
<p>Example: <code>quam</code></p>
            </div>
                    </form>

                    <h2 id="divisiones-GETapi-divisiones--nombre-">Busca una división por nombre.</h2>

<p>
</p>

<p>El nombre es insensible a mayúsculas/minúsculas y acentos.
La búsqueda debe ser exacta con el nombre de la división.</p>

<span id="example-requests-GETapi-divisiones--nombre-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/divisiones/Pentateuco"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/divisiones/Pentateuco"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-divisiones--nombre-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Pentateuco&quot;,
        &quot;volumen_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, División no encontrada):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-divisiones--nombre-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-divisiones--nombre-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-divisiones--nombre-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-divisiones--nombre-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-divisiones--nombre-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-divisiones--nombre-" data-method="GET"
      data-path="api/divisiones/{nombre}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-divisiones--nombre-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-divisiones--nombre-"
                    onclick="tryItOut('GETapi-divisiones--nombre-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-divisiones--nombre-"
                    onclick="cancelTryOut('GETapi-divisiones--nombre-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-divisiones--nombre-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/divisiones/{nombre}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nombre</code></b>&nbsp;&nbsp;
<small>Nombre de la división</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nombre"                data-endpoint="GETapi-divisiones--nombre-"
               value="Pentateuco"
               data-component="url">
    <br>
<p>Example: <code>Pentateuco</code></p>
            </div>
                    </form>

                    <h2 id="divisiones-GETapi-divisiones--id--libros">Lista todos los libros de una división.</h2>

<p>
</p>



<span id="example-requests-GETapi-divisiones--id--libros">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/divisiones/quasi/libros"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/divisiones/quasi/libros"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-divisiones--id--libros">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nombre&quot;: &quot;G&eacute;nesis&quot;,
            &quot;abreviatura&quot;: &quot;GEN&quot;,
            &quot;division_id&quot;: 1,
            &quot;volumen_id&quot;: 1
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, División no encontrada):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID de la división</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-divisiones--id--libros"
               value="quasi"
               data-component="url">
    <br>
<p>Example: <code>quasi</code></p>
            </div>
                    </form>

                    <h2 id="divisiones-GETapi-divisiones--id--volumen">Obtiene el volumen al que pertenece la división.</h2>

<p>
</p>



<span id="example-requests-GETapi-divisiones--id--volumen">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/divisiones/eum/volumen"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/divisiones/eum/volumen"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-divisiones--id--volumen">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Antiguo Testamento&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, División no encontrada):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID de la división</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-divisiones--id--volumen"
               value="eum"
               data-component="url">
    <br>
<p>Example: <code>eum</code></p>
            </div>
                    </form>

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

                    <h2 id="endpoints-GETapi-audio--libro---capitulo-">GET api/audio/{libro}/{capitulo}</h2>

<p>
</p>



<span id="example-requests-GETapi-audio--libro---capitulo-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/audio/corrupti/recusandae"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/audio/corrupti/recusandae"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-audio--libro---capitulo-">
    </span>
<span id="execution-results-GETapi-audio--libro---capitulo-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-audio--libro---capitulo-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-audio--libro---capitulo-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-audio--libro---capitulo-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-audio--libro---capitulo-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-audio--libro---capitulo-" data-method="GET"
      data-path="api/audio/{libro}/{capitulo}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-audio--libro---capitulo-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-audio--libro---capitulo-"
                    onclick="tryItOut('GETapi-audio--libro---capitulo-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-audio--libro---capitulo-"
                    onclick="cancelTryOut('GETapi-audio--libro---capitulo-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-audio--libro---capitulo-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/audio/{libro}/{capitulo}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>libro</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="libro"                data-endpoint="GETapi-audio--libro---capitulo-"
               value="corrupti"
               data-component="url">
    <br>
<p>Example: <code>corrupti</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>capitulo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="capitulo"                data-endpoint="GETapi-audio--libro---capitulo-"
               value="recusandae"
               data-component="url">
    <br>
<p>Example: <code>recusandae</code></p>
            </div>
                    </form>

                <h1 id="libros">Libros</h1>

    

                                <h2 id="libros-GETapi-libros">Lista todos los libros.</h2>

<p>
</p>

<p>Retorna una colección de todos los libros disponibles en el sistema.</p>

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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nombre&quot;: &quot;G&eacute;nesis&quot;,
            &quot;abreviatura&quot;: &quot;GEN&quot;,
            &quot;division_id&quot;: 1,
            &quot;volumen_id&quot;: 1
        }
    ]
}</code>
 </pre>
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

                    <h2 id="libros-GETapi-libros--id-">Obtiene un libro específico por ID.</h2>

<p>
</p>



<span id="example-requests-GETapi-libros--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/libros/ab"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/libros/ab"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-libros--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;G&eacute;nesis&quot;,
        &quot;abreviatura&quot;: &quot;GEN&quot;,
        &quot;division_id&quot;: 1,
        &quot;volumen_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Libro no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del libro</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-libros--id-"
               value="ab"
               data-component="url">
    <br>
<p>Example: <code>ab</code></p>
            </div>
                    </form>

                    <h2 id="libros-GETapi-libros--nombre-">Busca un libro por nombre.</h2>

<p>
</p>

<p>El nombre es insensible a mayúsculas/minúsculas y acentos.
La búsqueda funciona tanto con el nombre completo como con la abreviatura del libro.
Para libros de José Smith, se debe incluir el guión (ej: 'José Smith-Historia').</p>

<span id="example-requests-GETapi-libros--nombre-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/libros/Genesis"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/libros/Genesis"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-libros--nombre-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;G&eacute;nesis&quot;,
        &quot;abreviatura&quot;: &quot;GEN&quot;,
        &quot;division_id&quot;: 1,
        &quot;volumen_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Libro no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-libros--nombre-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-libros--nombre-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-libros--nombre-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-libros--nombre-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-libros--nombre-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-libros--nombre-" data-method="GET"
      data-path="api/libros/{nombre}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-libros--nombre-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-libros--nombre-"
                    onclick="tryItOut('GETapi-libros--nombre-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-libros--nombre-"
                    onclick="cancelTryOut('GETapi-libros--nombre-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-libros--nombre-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/libros/{nombre}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nombre</code></b>&nbsp;&nbsp;
<small>Nombre o abreviatura del libro</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nombre"                data-endpoint="GETapi-libros--nombre-"
               value="Genesis"
               data-component="url">
    <br>
<p>Example: <code>Genesis</code></p>
            </div>
                    </form>

                    <h2 id="libros-GETapi-libros--id--partes">Lista todas las partes de un libro.</h2>

<p>
</p>



<span id="example-requests-GETapi-libros--id--partes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/libros/deleniti/partes"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/libros/deleniti/partes"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-libros--id--partes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nombre&quot;: &quot;Parte 1&quot;,
            &quot;orden&quot;: 1,
            &quot;libro_id&quot;: 1
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Libro no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del libro</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-libros--id--partes"
               value="deleniti"
               data-component="url">
    <br>
<p>Example: <code>deleniti</code></p>
            </div>
                    </form>

                    <h2 id="libros-GETapi-libros--id--capitulos">Lista todos los capítulos de un libro.</h2>

<p>
</p>



<span id="example-requests-GETapi-libros--id--capitulos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/libros/et/capitulos"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/libros/et/capitulos"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-libros--id--capitulos">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nombre&quot;: &quot;Cap&iacute;tulo 1&quot;,
            &quot;num_capitulo&quot;: 1,
            &quot;orden&quot;: 1,
            &quot;libro_id&quot;: 1,
            &quot;parte_id&quot;: null
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Libro no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del libro</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-libros--id--capitulos"
               value="et"
               data-component="url">
    <br>
<p>Example: <code>et</code></p>
            </div>
                    </form>

                    <h2 id="libros-GETapi-libros--id--division">Obtiene la división a la que pertenece el libro.</h2>

<p>
</p>



<span id="example-requests-GETapi-libros--id--division">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/libros/inventore/division"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/libros/inventore/division"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-libros--id--division">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Pentateuco&quot;,
        &quot;volumen_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Libro no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del libro</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-libros--id--division"
               value="inventore"
               data-component="url">
    <br>
<p>Example: <code>inventore</code></p>
            </div>
                    </form>

                    <h2 id="libros-GETapi-libros--id--volumen">Obtiene el volumen al que pertenece el libro.</h2>

<p>
</p>



<span id="example-requests-GETapi-libros--id--volumen">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/libros/harum/volumen"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/libros/harum/volumen"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-libros--id--volumen">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Antiguo Testamento&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Libro no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del libro</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-libros--id--volumen"
               value="harum"
               data-component="url">
    <br>
<p>Example: <code>harum</code></p>
            </div>
                    </form>

                <h1 id="partes">Partes</h1>

    

                                <h2 id="partes-GETapi-partes">Lista todas las partes.</h2>

<p>
</p>

<p>Retorna una colección de todas las partes disponibles en el sistema.</p>

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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nombre&quot;: &quot;Parte 1&quot;,
            &quot;orden&quot;: 1,
            &quot;libro_id&quot;: 1
        }
    ]
}</code>
 </pre>
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

                    <h2 id="partes-GETapi-partes-item">Busca una parte por nombre.</h2>

<p>
</p>

<p>El nombre es insensible a mayúsculas/minúsculas y acentos.
La búsqueda funciona si el nombre buscado está contenido en el nombre de la parte.</p>

<span id="example-requests-GETapi-partes-item">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/partes/item?nombre=Parte+1"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/partes/item"
);

const params = {
    "nombre": "Parte 1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-partes-item">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Parte 1&quot;,
        &quot;orden&quot;: 1,
        &quot;libro_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400, El parámetro nombre es requerido):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
            <blockquote>
            <p>Example response (404, Parte no encontrada):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nombre</code></b>&nbsp;&nbsp;
<small>Nombre de la parte a buscar</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nombre"                data-endpoint="GETapi-partes-item"
               value="Parte 1"
               data-component="query">
    <br>
<p>Example: <code>Parte 1</code></p>
            </div>
                </form>

                    <h2 id="partes-GETapi-partes--id-">Obtiene una parte específica por ID.</h2>

<p>
</p>



<span id="example-requests-GETapi-partes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/partes/ea"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/partes/ea"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-partes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Parte 1&quot;,
        &quot;orden&quot;: 1,
        &quot;libro_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Parte no encontrada):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID de la parte</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-partes--id-"
               value="ea"
               data-component="url">
    <br>
<p>Example: <code>ea</code></p>
            </div>
                    </form>

                    <h2 id="partes-GETapi-partes--id--capitulos">Lista todos los capítulos de una parte.</h2>

<p>
</p>



<span id="example-requests-GETapi-partes--id--capitulos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/partes/deserunt/capitulos"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/partes/deserunt/capitulos"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-partes--id--capitulos">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nombre&quot;: &quot;Cap&iacute;tulo 1&quot;,
            &quot;num_capitulo&quot;: 1,
            &quot;orden&quot;: 1,
            &quot;libro_id&quot;: 1,
            &quot;parte_id&quot;: 1
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Parte no encontrada):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID de la parte</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-partes--id--capitulos"
               value="deserunt"
               data-component="url">
    <br>
<p>Example: <code>deserunt</code></p>
            </div>
                    </form>

                    <h2 id="partes-GETapi-partes--id--libro">Obtiene el libro al que pertenece la parte.</h2>

<p>
</p>



<span id="example-requests-GETapi-partes--id--libro">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/partes/eos/libro"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/partes/eos/libro"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-partes--id--libro">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;G&eacute;nesis&quot;,
        &quot;division_id&quot;: 1,
        &quot;volumen_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Parte no encontrada):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID de la parte</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-partes--id--libro"
               value="eos"
               data-component="url">
    <br>
<p>Example: <code>eos</code></p>
            </div>
                    </form>

                <h1 id="pericopas">Pericopas</h1>

    

                                <h2 id="pericopas-GETapi-pericopas">Lista todas las pericopas.</h2>

<p>
</p>

<p>Retorna una colección de todas las pericopas disponibles en el sistema.</p>

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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;titulo&quot;: &quot;La Creaci&oacute;n&quot;,
            &quot;orden&quot;: 1,
            &quot;capitulo_id&quot;: 1
        }
    ]
}</code>
 </pre>
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

                    <h2 id="pericopas-GETapi-pericopas-item">Busca una pericopa por título.</h2>

<p>
</p>

<p>La búsqueda es insensible a mayúsculas/minúsculas y acentos.
Encuentra coincidencias parciales en ambas direcciones.</p>

<span id="example-requests-GETapi-pericopas-item">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pericopas/item?titulo=La+Creaci%C3%B3n"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pericopas/item"
);

const params = {
    "titulo": "La Creación",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pericopas-item">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;titulo&quot;: &quot;La Creaci&oacute;n&quot;,
        &quot;orden&quot;: 1,
        &quot;capitulo_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400, El parámetro titulo es requerido):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
            <blockquote>
            <p>Example response (404, Pericopa no encontrada):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>titulo</code></b>&nbsp;&nbsp;
<small>Título de la pericopa</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="titulo"                data-endpoint="GETapi-pericopas-item"
               value="La Creación"
               data-component="query">
    <br>
<p>Example: <code>La Creación</code></p>
            </div>
                </form>

                    <h2 id="pericopas-GETapi-pericopas--id-">Obtiene una pericopa específica por ID.</h2>

<p>
</p>



<span id="example-requests-GETapi-pericopas--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pericopas/architecto"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pericopas/architecto"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pericopas--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;titulo&quot;: &quot;La Creaci&oacute;n&quot;,
        &quot;orden&quot;: 1,
        &quot;capitulo_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Pericopa no encontrada):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID de la pericopa</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-pericopas--id-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="pericopas-GETapi-pericopas--id--versiculos">Lista todos los versículos de una pericopa.</h2>

<p>
</p>



<span id="example-requests-GETapi-pericopas--id--versiculos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pericopas/alias/versiculos"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pericopas/alias/versiculos"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pericopas--id--versiculos">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;contenido&quot;: &quot;En el principio cre&oacute; Dios los cielos y la tierra.&quot;,
            &quot;num_versiculo&quot;: 1,
            &quot;orden&quot;: 1,
            &quot;capitulo_id&quot;: 1,
            &quot;pericopa_id&quot;: 1
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Pericopa no encontrada):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID de la pericopa</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-pericopas--id--versiculos"
               value="alias"
               data-component="url">
    <br>
<p>Example: <code>alias</code></p>
            </div>
                    </form>

                    <h2 id="pericopas-GETapi-pericopas--id--capitulo">Obtiene el capítulo al que pertenece la pericopa.</h2>

<p>
</p>



<span id="example-requests-GETapi-pericopas--id--capitulo">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pericopas/cum/capitulo"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pericopas/cum/capitulo"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pericopas--id--capitulo">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Cap&iacute;tulo 1&quot;,
        &quot;num_capitulo&quot;: 1,
        &quot;orden&quot;: 1,
        &quot;libro_id&quot;: 1,
        &quot;parte_id&quot;: null
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Pericopa no encontrada):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID de la pericopa</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-pericopas--id--capitulo"
               value="cum"
               data-component="url">
    <br>
<p>Example: <code>cum</code></p>
            </div>
                    </form>

                <h1 id="versiculos">Versiculos</h1>

    

                                <h2 id="versiculos-GETapi-versiculos">Lista todos los versículos.</h2>

<p>
</p>

<p>Retorna una colección paginada de todos los versículos disponibles en el sistema.</p>

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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;contenido&quot;: &quot;En el principio cre&oacute; Dios los cielos y la tierra.&quot;,
            &quot;num_versiculo&quot;: 1,
            &quot;orden&quot;: 1,
            &quot;capitulo_id&quot;: 1,
            &quot;pericopa_id&quot;: 1
        }
    ],
    &quot;current_page&quot;: 1,
    &quot;total&quot;: 100,
    &quot;per_page&quot;: 15
}</code>
 </pre>
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

                    <h2 id="versiculos-GETapi-versiculos-item">Busca un versículo por su referencia.</h2>

<p>
</p>

<p>La búsqueda es insensible a mayúsculas/minúsculas y acentos.
Ejemplo de referencia: 'Génesis 1:1'</p>

<span id="example-requests-GETapi-versiculos-item">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/versiculos/item?referencia=G%C3%A9nesis+1%3A1"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versiculos/item"
);

const params = {
    "referencia": "Génesis 1:1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-versiculos-item">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;contenido&quot;: &quot;En el principio cre&oacute; Dios los cielos y la tierra.&quot;,
        &quot;num_versiculo&quot;: 1,
        &quot;orden&quot;: 1,
        &quot;capitulo_id&quot;: 1,
        &quot;pericopa_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400, El parámetro referencia es requerido):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
            <blockquote>
            <p>Example response (404, Versículo no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>referencia</code></b>&nbsp;&nbsp;
<small>Referencia del versículo</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="referencia"                data-endpoint="GETapi-versiculos-item"
               value="Génesis 1:1"
               data-component="query">
    <br>
<p>Example: <code>Génesis 1:1</code></p>
            </div>
                </form>

                    <h2 id="versiculos-GETapi-versiculos-pasaje">Busca versículos por referencia completa.</h2>

<p>
</p>

<p>Acepta referencias en los siguientes formatos:</p>
<ul>
<li>Formato general: &quot;Libro Capítulo:Versículo&quot; o &quot;Libro Capítulo:Versículo-Versículo&quot;</li>
<li>Doctrina y Convenios: &quot;DyC 4:2&quot; o &quot;Doctrina y Convenios 4:2&quot;</li>
<li>Declaraciones Oficiales: &quot;DO 2&quot; o &quot;DO 2:3&quot; o &quot;Declaración oficial 2&quot; o &quot;Declaración oficial 2:3&quot;</li>
</ul>
<p>Ejemplos:</p>
<ul>
<li>&quot;Juan 1:1&quot;</li>
<li>&quot;Juan 1:1-3&quot;</li>
<li>&quot;DyC 4:2&quot;</li>
<li>&quot;DO 2:3&quot;</li>
</ul>

<span id="example-requests-GETapi-versiculos-pasaje">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/versiculos/pasaje?referencia=Juan+1%3A1-3"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versiculos/pasaje"
);

const params = {
    "referencia": "Juan 1:1-3",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-versiculos-pasaje">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;contenido&quot;: &quot;En el principio era el Verbo...&quot;,
            &quot;num_versiculo&quot;: 1,
            &quot;orden&quot;: 1
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (400, Formato de referencia inválido):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
            <blockquote>
            <p>Example response (404, Versículos no encontrados):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-versiculos-pasaje" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-versiculos-pasaje"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-versiculos-pasaje"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-versiculos-pasaje" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-versiculos-pasaje">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-versiculos-pasaje" data-method="GET"
      data-path="api/versiculos/pasaje"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-versiculos-pasaje', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-versiculos-pasaje"
                    onclick="tryItOut('GETapi-versiculos-pasaje');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-versiculos-pasaje"
                    onclick="cancelTryOut('GETapi-versiculos-pasaje');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-versiculos-pasaje"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/versiculos/pasaje</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>referencia</code></b>&nbsp;&nbsp;
<small>Referencia completa</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="referencia"                data-endpoint="GETapi-versiculos-pasaje"
               value="Juan 1:1-3"
               data-component="query">
    <br>
<p>Example: <code>Juan 1:1-3</code></p>
            </div>
                </form>

                    <h2 id="versiculos-GETapi-versiculos--id-">Obtiene un versículo específico.</h2>

<p>
</p>



<span id="example-requests-GETapi-versiculos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/versiculos/assumenda"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versiculos/assumenda"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-versiculos--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;contenido&quot;: &quot;En el principio cre&oacute; Dios los cielos y la tierra.&quot;,
        &quot;num_versiculo&quot;: 1,
        &quot;orden&quot;: 1,
        &quot;capitulo_id&quot;: 1,
        &quot;pericopa_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Versículo no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del versículo</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-versiculos--id-"
               value="assumenda"
               data-component="url">
    <br>
<p>Example: <code>assumenda</code></p>
            </div>
                    </form>

                    <h2 id="versiculos-GETapi-versiculos--id--pericopa">Obtiene la perícopa a la que pertenece el versículo.</h2>

<p>
</p>



<span id="example-requests-GETapi-versiculos--id--pericopa">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/versiculos/fuga/pericopa"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versiculos/fuga/pericopa"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-versiculos--id--pericopa">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;titulo&quot;: &quot;La Creaci&oacute;n&quot;,
        &quot;orden&quot;: 1,
        &quot;capitulo_id&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Versículo no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del versículo</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-versiculos--id--pericopa"
               value="fuga"
               data-component="url">
    <br>
<p>Example: <code>fuga</code></p>
            </div>
                    </form>

                    <h2 id="versiculos-GETapi-versiculos--id--capitulo">Obtiene el capítulo al que pertenece el versículo.</h2>

<p>
</p>



<span id="example-requests-GETapi-versiculos--id--capitulo">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/versiculos/repellat/capitulo"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/versiculos/repellat/capitulo"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-versiculos--id--capitulo">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Cap&iacute;tulo 1&quot;,
        &quot;num_capitulo&quot;: 1,
        &quot;orden&quot;: 1,
        &quot;libro_id&quot;: 1,
        &quot;parte_id&quot;: null
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Versículo no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del versículo</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-versiculos--id--capitulo"
               value="repellat"
               data-component="url">
    <br>
<p>Example: <code>repellat</code></p>
            </div>
                    </form>

                <h1 id="volumenes">Volúmenes</h1>

    

                                <h2 id="volumenes-GETapi-volumenes">Lista todos los volúmenes.</h2>

<p>
</p>

<p>Retorna una colección de todos los volúmenes disponibles en el sistema.
Los volúmenes son las principales divisiones de las escrituras (ej: Antiguo Testamento, Nuevo Testamento).</p>

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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nombre&quot;: &quot;Antiguo Testamento&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;nombre&quot;: &quot;Nuevo Testamento&quot;
        }
    ]
}</code>
 </pre>
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

                    <h2 id="volumenes-GETapi-volumenes--id-">Obtiene un volumen específico por ID.</h2>

<p>
</p>



<span id="example-requests-GETapi-volumenes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/volumenes/alias"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/volumenes/alias"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-volumenes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Antiguo Testamento&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Volumen no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del volumen</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-volumenes--id-"
               value="alias"
               data-component="url">
    <br>
<p>Example: <code>alias</code></p>
            </div>
                    </form>

                    <h2 id="volumenes-GETapi-volumenes--nombre-">Busca un volumen por nombre.</h2>

<p>
</p>

<p>El nombre es insensible a mayúsculas/minúsculas y acentos.
La búsqueda debe ser exacta con el nombre del volumen.</p>

<span id="example-requests-GETapi-volumenes--nombre-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/volumenes/Antiguo Testamento"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/volumenes/Antiguo Testamento"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-volumenes--nombre-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nombre&quot;: &quot;Antiguo Testamento&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Volumen no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-volumenes--nombre-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-volumenes--nombre-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-volumenes--nombre-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-volumenes--nombre-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-volumenes--nombre-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-volumenes--nombre-" data-method="GET"
      data-path="api/volumenes/{nombre}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-volumenes--nombre-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-volumenes--nombre-"
                    onclick="tryItOut('GETapi-volumenes--nombre-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-volumenes--nombre-"
                    onclick="cancelTryOut('GETapi-volumenes--nombre-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-volumenes--nombre-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/volumenes/{nombre}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nombre</code></b>&nbsp;&nbsp;
<small>Nombre del volumen</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nombre"                data-endpoint="GETapi-volumenes--nombre-"
               value="Antiguo Testamento"
               data-component="url">
    <br>
<p>Example: <code>Antiguo Testamento</code></p>
            </div>
                    </form>

                    <h2 id="volumenes-GETapi-volumenes--id--divisiones">Lista todas las divisiones de un volumen.</h2>

<p>
</p>



<span id="example-requests-GETapi-volumenes--id--divisiones">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/volumenes/ut/divisiones"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/volumenes/ut/divisiones"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-volumenes--id--divisiones">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nombre&quot;: &quot;Pentateuco&quot;,
            &quot;volumen_id&quot;: 1
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Volumen no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del volumen</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-volumenes--id--divisiones"
               value="ut"
               data-component="url">
    <br>
<p>Example: <code>ut</code></p>
            </div>
                    </form>

                    <h2 id="volumenes-GETapi-volumenes--id--libros">Lista todos los libros de un volumen.</h2>

<p>
</p>



<span id="example-requests-GETapi-volumenes--id--libros">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/volumenes/voluptatem/libros"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/volumenes/voluptatem/libros"
);

fetch(url, {
    method: "GET",
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-volumenes--id--libros">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nombre&quot;: &quot;G&eacute;nesis&quot;,
            &quot;abreviatura&quot;: &quot;GEN&quot;,
            &quot;division_id&quot;: 1,
            &quot;volumen_id&quot;: 1
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Volumen no encontrado):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
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
<small>El ID del volumen</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-volumenes--id--libros"
               value="voluptatem"
               data-component="url">
    <br>
<p>Example: <code>voluptatem</code></p>
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
