# FAQ APIs

Apis for managing event resource

## GET /faqs




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/faqs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/faqs"
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
    "faqs": []
}
```
<div id="execution-results-GETapi-faqs" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-faqs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-faqs"></code></pre>
</div>
<div id="execution-error-GETapi-faqs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-faqs"></code></pre>
</div>
<form id="form-GETapi-faqs" data-method="GET" data-path="api/faqs" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-faqs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-faqs" onclick="tryItOut('GETapi-faqs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-faqs" onclick="cancelTryOut('GETapi-faqs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-faqs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/faqs</code></b>
</p>
</form>


## POST /faqs




> Example request:

```bash
curl -X POST \
    "http://localhost/api/faqs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"sed","content":"rerum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/faqs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "sed",
    "content": "rerum"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-faqs" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-faqs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-faqs"></code></pre>
</div>
<div id="execution-error-POSTapi-faqs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-faqs"></code></pre>
</div>
<form id="form-POSTapi-faqs" data-method="POST" data-path="api/faqs" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-faqs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-faqs" onclick="tryItOut('POSTapi-faqs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-faqs" onclick="cancelTryOut('POSTapi-faqs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-faqs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/faqs</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-faqs" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="content" data-endpoint="POSTapi-faqs" data-component="body" required  hidden>
<br>

</p>

</form>


## GET /faqs/id




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/faqs/sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/faqs/sed"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-faqs--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-faqs--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-faqs--id-"></code></pre>
</div>
<div id="execution-error-GETapi-faqs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-faqs--id-"></code></pre>
</div>
<form id="form-GETapi-faqs--id-" data-method="GET" data-path="api/faqs/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-faqs--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-faqs--id-" onclick="tryItOut('GETapi-faqs--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-faqs--id-" onclick="cancelTryOut('GETapi-faqs--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-faqs--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/faqs/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-faqs--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## PUT /faqs/id




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/faqs/totam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"ea","content":"labore"}'

```

```javascript
const url = new URL(
    "http://localhost/api/faqs/totam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "ea",
    "content": "labore"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-faqs--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-faqs--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-faqs--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-faqs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-faqs--id-"></code></pre>
</div>
<form id="form-PUTapi-faqs--id-" data-method="PUT" data-path="api/faqs/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-faqs--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-faqs--id-" onclick="tryItOut('PUTapi-faqs--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-faqs--id-" onclick="cancelTryOut('PUTapi-faqs--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-faqs--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/faqs/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-faqs--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-faqs--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="content" data-endpoint="PUTapi-faqs--id-" data-component="body" required  hidden>
<br>

</p>

</form>


## DELETE /faqs




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/faqs/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/faqs/quia"
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


<div id="execution-results-DELETEapi-faqs--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-faqs--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-faqs--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-faqs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-faqs--id-"></code></pre>
</div>
<form id="form-DELETEapi-faqs--id-" data-method="DELETE" data-path="api/faqs/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-faqs--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-faqs--id-" onclick="tryItOut('DELETEapi-faqs--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-faqs--id-" onclick="cancelTryOut('DELETEapi-faqs--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-faqs--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/faqs/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-faqs--id-" data-component="url" required  hidden>
<br>

</p>
</form>



