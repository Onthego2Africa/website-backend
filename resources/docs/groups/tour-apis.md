# Tour APIs

Apis for managing event resource

## GET /tours




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/tours" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tours"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "tours": []
}
```
<div id="execution-results-GETapi-tours" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-tours"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tours"></code></pre>
</div>
<div id="execution-error-GETapi-tours" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tours"></code></pre>
</div>
<form id="form-GETapi-tours" data-method="GET" data-path="api/tours" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-tours', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-tours" onclick="tryItOut('GETapi-tours');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-tours" onclick="cancelTryOut('GETapi-tours');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-tours" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/tours</code></b>
</p>
</form>


## GET /tours/slug


Fetch tour with slug

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/tours/impedit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tours/impedit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "tour": {
        "id": 1,
        "title": "dgs",
        "slug": "dgs",
        "cover_image": "http:\/\/127.0.0.1:8000\/storage\/cover_images\/lheicfYAjrZTfqlbDutpqUIpS9ueefojUyYDsDYx.jpg",
        "overview": "skflalkjflfkj",
        "itenary": "dsfsf",
        "cost": "dsf",
        "created_at": "2023-08-16T14:11:19.000000Z",
        "updated_at": "2023-08-16T14:11:19.000000Z",
        "images": []
    }
}
```
<div id="execution-results-GETapi-tours--slug-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-tours--slug-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tours--slug-"></code></pre>
</div>
<div id="execution-error-GETapi-tours--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tours--slug-"></code></pre>
</div>
<form id="form-GETapi-tours--slug-" data-method="GET" data-path="api/tours/{slug}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-tours--slug-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-tours--slug-" onclick="tryItOut('GETapi-tours--slug-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-tours--slug-" onclick="cancelTryOut('GETapi-tours--slug-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-tours--slug-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/tours/{slug}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="slug" data-endpoint="GETapi-tours--slug-" data-component="url" required  hidden>
<br>

</p>
</form>


## POST /tours




> Example request:

```bash
curl -X POST \
    "http://localhost/api/tours" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "title=veritatis" \
    -F "overview=esse" \
    -F "itenary=voluptatem" \
    -F "cost=quam" \
    -F "images[]=aspernatur" \
    -F "cover_image=@C:\Users\PC\AppData\Local\Temp\phpEAAC.tmp" 
```

```javascript
const url = new URL(
    "http://localhost/api/tours"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'veritatis');
body.append('overview', 'esse');
body.append('itenary', 'voluptatem');
body.append('cost', 'quam');
body.append('images[]', 'aspernatur');
body.append('cover_image', document.querySelector('input[name="cover_image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-tours" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-tours"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tours"></code></pre>
</div>
<div id="execution-error-POSTapi-tours" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tours"></code></pre>
</div>
<form id="form-POSTapi-tours" data-method="POST" data-path="api/tours" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-tours', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-tours" onclick="tryItOut('POSTapi-tours');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-tours" onclick="cancelTryOut('POSTapi-tours');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-tours" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/tours</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-tours" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>cover_image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="cover_image" data-endpoint="POSTapi-tours" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>overview</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="overview" data-endpoint="POSTapi-tours" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>itenary</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="itenary" data-endpoint="POSTapi-tours" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>cost</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cost" data-endpoint="POSTapi-tours" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>images[]</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="images.0" data-endpoint="POSTapi-tours" data-component="body" required  hidden>
<br>

</p>

</form>


## PUT /tours




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/tours/alias" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "title=et" \
    -F "overview=temporibus" \
    -F "itenary=ut" \
    -F "cost=eveniet" \
    -F "images[]=ratione" \
    -F "cover_image=@C:\Users\PC\AppData\Local\Temp\phpEADC.tmp" 
```

```javascript
const url = new URL(
    "http://localhost/api/tours/alias"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'et');
body.append('overview', 'temporibus');
body.append('itenary', 'ut');
body.append('cost', 'eveniet');
body.append('images[]', 'ratione');
body.append('cover_image', document.querySelector('input[name="cover_image"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-tours--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-tours--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-tours--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-tours--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-tours--id-"></code></pre>
</div>
<form id="form-PUTapi-tours--id-" data-method="PUT" data-path="api/tours/{id}" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-tours--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-tours--id-" onclick="tryItOut('PUTapi-tours--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-tours--id-" onclick="cancelTryOut('PUTapi-tours--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-tours--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/tours/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-tours--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-tours--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>cover_image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="cover_image" data-endpoint="PUTapi-tours--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>overview</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="overview" data-endpoint="PUTapi-tours--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>itenary</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="itenary" data-endpoint="PUTapi-tours--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>cost</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cost" data-endpoint="PUTapi-tours--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>images[]</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="images.0" data-endpoint="PUTapi-tours--id-" data-component="body" required  hidden>
<br>

</p>

</form>


## DELETE /tours




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/tours/maiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/tours/maiores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-tours--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-tours--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-tours--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-tours--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-tours--id-"></code></pre>
</div>
<form id="form-DELETEapi-tours--id-" data-method="DELETE" data-path="api/tours/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-tours--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-tours--id-" onclick="tryItOut('DELETEapi-tours--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-tours--id-" onclick="cancelTryOut('DELETEapi-tours--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-tours--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/tours/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-tours--id-" data-component="url" required  hidden>
<br>

</p>
</form>



