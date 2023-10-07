# Contact Form APIs

Apis for managing event resource

## POST /contact-us




> Example request:

```bash
curl -X POST \
    "https://onthego2africa.com/api/api/contact-us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"totam","email":"vel","text":"officiis"}'

```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/api/contact-us"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "totam",
    "email": "vel",
    "text": "officiis"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-contact-us" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-contact-us"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-contact-us"></code></pre>
</div>
<div id="execution-error-POSTapi-contact-us" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-contact-us"></code></pre>
</div>
<form id="form-POSTapi-contact-us" data-method="POST" data-path="api/contact-us" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-contact-us', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-contact-us" onclick="tryItOut('POSTapi-contact-us');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-contact-us" onclick="cancelTryOut('POSTapi-contact-us');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-contact-us" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/contact-us</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-contact-us" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-contact-us" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="text" data-endpoint="POSTapi-contact-us" data-component="body" required  hidden>
<br>

</p>

</form>


## GET /contact-us




> Example request:

```bash
curl -X GET \
    -G "https://onthego2africa.com/api/api/contact-us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/api/contact-us"
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
<div id="execution-results-GETapi-contact-us" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-contact-us"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-contact-us"></code></pre>
</div>
<div id="execution-error-GETapi-contact-us" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-contact-us"></code></pre>
</div>
<form id="form-GETapi-contact-us" data-method="GET" data-path="api/contact-us" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-contact-us', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-contact-us" onclick="tryItOut('GETapi-contact-us');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-contact-us" onclick="cancelTryOut('GETapi-contact-us');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-contact-us" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/contact-us</code></b>
</p>
</form>


## GET /contact-us/id




> Example request:

```bash
curl -X GET \
    -G "https://onthego2africa.com/api/api/contact-us/eveniet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/api/contact-us/eveniet"
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
<div id="execution-results-GETapi-contact-us--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-contact-us--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-contact-us--id-"></code></pre>
</div>
<div id="execution-error-GETapi-contact-us--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-contact-us--id-"></code></pre>
</div>
<form id="form-GETapi-contact-us--id-" data-method="GET" data-path="api/contact-us/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-contact-us--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-contact-us--id-" onclick="tryItOut('GETapi-contact-us--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-contact-us--id-" onclick="cancelTryOut('GETapi-contact-us--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-contact-us--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/contact-us/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-contact-us--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## DELETE /contact-us




> Example request:

```bash
curl -X DELETE \
    "https://onthego2africa.com/api/api/contact-us/ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/api/contact-us/ea"
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


<div id="execution-results-DELETEapi-contact-us--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-contact-us--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-contact-us--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-contact-us--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-contact-us--id-"></code></pre>
</div>
<form id="form-DELETEapi-contact-us--id-" data-method="DELETE" data-path="api/contact-us/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-contact-us--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-contact-us--id-" onclick="tryItOut('DELETEapi-contact-us--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-contact-us--id-" onclick="cancelTryOut('DELETEapi-contact-us--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-contact-us--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/contact-us/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-contact-us--id-" data-component="url" required  hidden>
<br>

</p>
</form>



