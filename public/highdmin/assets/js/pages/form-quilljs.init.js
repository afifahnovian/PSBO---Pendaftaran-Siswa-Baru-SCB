var quill=new Quill("#snow-editor",{
  theme:"snow",
  modules:{toolbar:[["bold","italic","underline","strike","blockquote"],["link"],[{ 'header': 1 },{ 'header': 2 }],[{ 'header': [1, 2, 3, 4, 5, 6, false] }],[{ 'list': 'ordered'}, { 'list': 'bullet' }],[{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
  [{ 'font': [] }],
  [{ 'align': [] }]]}});
  quill=new Quill("#bubble-editor",{theme:"bubble"});
let Link = window.Quill.import('formats/link');

class CustomLink extends Link {

  static sanitize(url) {
    let value = super.sanitize(url);
    if(value)
    {
      for(let i=0;i<CustomLink.PROTOCOL_WHITELIST.length;i++)
        if(value.startsWith(CustomLink.PROTOCOL_WHITELIST[i]))
          return value;
      return `http://${value}`
    }
    return value;
  }
}
Quill.register(CustomLink);