export function peticionAjax(type , url , data = null)
{
   return fetch(url, {
        method: type,
        headers: {
            'Content-Type': 'application/json',
            "X-CSRF-TOKEN": document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content"),
        },
        body:data
    });

}
