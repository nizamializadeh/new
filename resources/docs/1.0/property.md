# WeekDays

---


<a name="places_category"></a>
## Weekday

### Endpoint
> {info} Please note that the URI for this endpoint only should not include api/{$version} before oauth/token, which means that the url will be: `example.com/oauth/token.` 

| Method | URI   | Headers |
| : |   :-   |  :  |
| GET |   property/place  |  Default  |


### URL Params (Query string)
```json 
{
    "lang"    : "string", // (optional) default value az
}
```

> {success} Success Response

Code `200`
Content

```json 
{
  "id"    : "integer",
  "key"  : "string",
  "value"  : "string",
}
```
