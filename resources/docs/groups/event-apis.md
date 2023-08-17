# Event APIs

Apis for managing event resource

## GET /events




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/events"
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
    "events": []
}
```
<div id="execution-results-GETapi-events" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-events"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-events"></code></pre>
</div>
<div id="execution-error-GETapi-events" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-events"></code></pre>
</div>
<form id="form-GETapi-events" data-method="GET" data-path="api/events" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-events', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-events" onclick="tryItOut('GETapi-events');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-events" onclick="cancelTryOut('GETapi-events');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-events" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/events</code></b>
</p>
</form>


## GET /events/slug


Fetch event with slug

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/events/officia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/events/officia"
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
    "event": {
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
<div id="execution-results-GETapi-events--slug-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-events--slug-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-events--slug-"></code></pre>
</div>
<div id="execution-error-GETapi-events--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-events--slug-"></code></pre>
</div>
<form id="form-GETapi-events--slug-" data-method="GET" data-path="api/events/{slug}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-events--slug-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-events--slug-" onclick="tryItOut('GETapi-events--slug-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-events--slug-" onclick="cancelTryOut('GETapi-events--slug-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-events--slug-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/events/{slug}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="slug" data-endpoint="GETapi-events--slug-" data-component="url" required  hidden>
<br>

</p>
</form>


## POST /events




> Example request:

```bash
curl -X POST \
    "http://localhost/api/events" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "title=in" \
    -F "overview=at" \
    -F "itenary=perspiciatis" \
    -F "cost=tempora" \
    -F "images[]=non" \
    -F "cover_image=@C:\Users\PC\AppData\Local\Temp\phpEAED.tmp" 
```

```javascript
const url = new URL(
    "http://localhost/api/events"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'in');
body.append('overview', 'at');
body.append('itenary', 'perspiciatis');
body.append('cost', 'tempora');
body.append('images[]', 'non');
body.append('cover_image', document.querySelector('input[name="cover_image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-events" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-events"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-events"></code></pre>
</div>
<div id="execution-error-POSTapi-events" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-events"></code></pre>
</div>
<form id="form-POSTapi-events" data-method="POST" data-path="api/events" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-events', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-events" onclick="tryItOut('POSTapi-events');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-events" onclick="cancelTryOut('POSTapi-events');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-events" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/events</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-events" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>cover_image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="cover_image" data-endpoint="POSTapi-events" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>overview</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="overview" data-endpoint="POSTapi-events" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>itenary</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="itenary" data-endpoint="POSTapi-events" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>cost</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cost" data-endpoint="POSTapi-events" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>images[]</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="images.0" data-endpoint="POSTapi-events" data-component="body" required  hidden>
<br>

</p>

</form>


## PUT /events




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/events/recusandae" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "title=ducimus" \
    -F "overview=ad" \
    -F "itenary=et" \
    -F "cost=nihil" \
    -F "images[]=vero" \
    -F "cover_image=@C:\Users\PC\AppData\Local\Temp\phpEAFD.tmp" 
```

```javascript
const url = new URL(
    "http://localhost/api/events/recusandae"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'ducimus');
body.append('overview', 'ad');
body.append('itenary', 'et');
body.append('cost', 'nihil');
body.append('images[]', 'vero');
body.append('cover_image', document.querySelector('input[name="cover_image"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-events--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-events--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-events--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-events--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-events--id-"></code></pre>
</div>
<form id="form-PUTapi-events--id-" data-method="PUT" data-path="api/events/{id}" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-events--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-events--id-" onclick="tryItOut('PUTapi-events--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-events--id-" onclick="cancelTryOut('PUTapi-events--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-events--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/events/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-events--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-events--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>cover_image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="cover_image" data-endpoint="PUTapi-events--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>overview</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="overview" data-endpoint="PUTapi-events--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>itenary</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="itenary" data-endpoint="PUTapi-events--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>cost</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cost" data-endpoint="PUTapi-events--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>images[]</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="images.0" data-endpoint="PUTapi-events--id-" data-component="body" required  hidden>
<br>

</p>

</form>


## DELETE /events




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/events/dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/events/dolor"
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


<div id="execution-results-DELETEapi-events--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-events--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-events--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-events--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-events--id-"></code></pre>
</div>
<form id="form-DELETEapi-events--id-" data-method="DELETE" data-path="api/events/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-events--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-events--id-" onclick="tryItOut('DELETEapi-events--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-events--id-" onclick="cancelTryOut('DELETEapi-events--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-events--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/events/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-events--id-" data-component="url" required  hidden>
<br>

</p>
</form>



