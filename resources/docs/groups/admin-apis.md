# Admin APIs

Apis for managing user resource

## GET /users


Get a list of all users

> Example request:

```bash
curl -X GET \
    -G "https://onthego2africa.com/api/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/api/users"
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
    "data": [
        {
            "name": "Miller Hills",
            "username": "yoberbrunner",
            "email": "melvin76@example.org",
            "email_verified_at": "2023-09-20T11:16:32.000000Z",
            "updated_at": "2023-09-20T11:16:32.000000Z",
            "created_at": "2023-09-20T11:16:32.000000Z",
            "id": 5
        },
        {
            "name": "Prof. Jay Flatley DDS",
            "username": "spinka.jackie",
            "email": "bayer.leann@example.org",
            "email_verified_at": "2023-09-20T11:16:32.000000Z",
            "updated_at": "2023-09-20T11:16:32.000000Z",
            "created_at": "2023-09-20T11:16:32.000000Z",
            "id": 6
        }
    ]
}
```
<div id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"></code></pre>
</div>
<div id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users"></code></pre>
</div>
<form id="form-GETapi-users" data-method="GET" data-path="api/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-users" onclick="tryItOut('GETapi-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-users" onclick="cancelTryOut('GETapi-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users</code></b>
</p>
</form>


## GET /admins




> Example request:

```bash
curl -X GET \
    -G "https://onthego2africa.com/api/api/admins" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/api/admins"
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
<div id="execution-results-GETapi-admins" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-admins"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admins"></code></pre>
</div>
<div id="execution-error-GETapi-admins" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admins"></code></pre>
</div>
<form id="form-GETapi-admins" data-method="GET" data-path="api/admins" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-admins', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-admins" onclick="tryItOut('GETapi-admins');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-admins" onclick="cancelTryOut('GETapi-admins');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-admins" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/admins</code></b>
</p>
</form>


## POST /admins


Store a newly created admin in storage.

> Example request:

```bash
curl -X POST \
    "https://onthego2africa.com/api/api/admins" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ab","username":"commodi","email":"ut","password":"nisi","password_confirmation":"nulla"}'

```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/api/admins"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ab",
    "username": "commodi",
    "email": "ut",
    "password": "nisi",
    "password_confirmation": "nulla"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-admins" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-admins"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admins"></code></pre>
</div>
<div id="execution-error-POSTapi-admins" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admins"></code></pre>
</div>
<form id="form-POSTapi-admins" data-method="POST" data-path="api/admins" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-admins', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-admins" onclick="tryItOut('POSTapi-admins');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-admins" onclick="cancelTryOut('POSTapi-admins');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-admins" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/admins</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-admins" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-admins" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-admins" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-admins" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password_confirmation" data-endpoint="POSTapi-admins" data-component="body" required  hidden>
<br>

</p>

</form>


## GET /admin/id




> Example request:

```bash
curl -X GET \
    -G "https://onthego2africa.com/api/api/admins/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/api/admins/rerum"
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
<div id="execution-results-GETapi-admins--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-admins--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admins--id-"></code></pre>
</div>
<div id="execution-error-GETapi-admins--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admins--id-"></code></pre>
</div>
<form id="form-GETapi-admins--id-" data-method="GET" data-path="api/admins/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-admins--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-admins--id-" onclick="tryItOut('GETapi-admins--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-admins--id-" onclick="cancelTryOut('GETapi-admins--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-admins--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/admins/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-admins--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## PUT /admins


Update the admin in storage.

> Example request:

```bash
curl -X PUT \
    "https://onthego2africa.com/api/api/admins" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"voluptas","username":"voluptates"}'

```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/api/admins"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "voluptas",
    "username": "voluptates"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-admins" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-admins"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admins"></code></pre>
</div>
<div id="execution-error-PUTapi-admins" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admins"></code></pre>
</div>
<form id="form-PUTapi-admins" data-method="PUT" data-path="api/admins" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-admins', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-admins" onclick="tryItOut('PUTapi-admins');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-admins" onclick="cancelTryOut('PUTapi-admins');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-admins" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/admins</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-admins" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="PUTapi-admins" data-component="body" required  hidden>
<br>

</p>

</form>


## DELETE /admins


Remove the Admin from storage.

> Example request:

```bash
curl -X DELETE \
    "https://onthego2africa.com/api/api/admins" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://onthego2africa.com/api/api/admins"
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


<div id="execution-results-DELETEapi-admins" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-admins"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admins"></code></pre>
</div>
<div id="execution-error-DELETEapi-admins" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admins"></code></pre>
</div>
<form id="form-DELETEapi-admins" data-method="DELETE" data-path="api/admins" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admins', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-admins" onclick="tryItOut('DELETEapi-admins');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-admins" onclick="cancelTryOut('DELETEapi-admins');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-admins" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/admins</code></b>
</p>
</form>



