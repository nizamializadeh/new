# Categories

---


<a name="places_category"></a>
## Categories for places

### Endpoint
> {info} Please note that the URI for this endpoint only should not include api/{$version} before oauth/token, which means that the url will be: `example.com/oauth/token.` 

| Method | URI   | Headers |
| : |   :-   |  :  |
| GET |   categories/type/place   |  Default  |
| GET |   categories/type/service   |  Default  |
| GET |   categories/type/gallery   |  Default  |
| GET |   categories/type/blog   |  Default  |

### URL Params (Query string)
```json 
{
    "paginate"    : "integer", // (optional) default value 4
    "lang"    : "string", // (optional) default value az
}
```

> {success} Success Response

Code `200`
Content

```json 
{
    current_page: "integer",
    data: [
      "id"    : "integer",
      "logo"    : "string",
      "name"  : "string",
      "color"  : "string",
    ],
    first_page_url: "string",
    from: "integer",
    last_page: "integer",
    last_page_url: "string",
    next_page_url: "string",
    path: "string",
    per_page: "integer",
    prev_page_url: "string",
    to: "integer",
    total: "integer"
}
```
