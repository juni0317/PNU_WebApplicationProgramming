var tagsToSelect = ['caption', 'table', 'thead', 'tr', 'th', 'td', 'tbody', 'tfoot', 'legend', 'label', 'p', 'fieldset', 'form', 'div', 'a'];

        tagsToSelect.forEach(function(tag) {
            var elements = document.getElementsByTagName(tag);
            Array.from(elements).forEach(function(node) {
                var newNode = document.createElement("SPAN");
                newNode.className = 'hoverNode';
                var t = document.createTextNode(node.tagName);
                newNode.appendChild(t);
                node.appendChild(newNode);
                var msg = "Tag: " + node.tagName + "\nClass: " + node.className + "\nID: " + node.id + "\nInnerHTML: " + node.innerHTML;
                newNode.addEventListener('click', function() {
                    alert(msg);
                });
            });
        });