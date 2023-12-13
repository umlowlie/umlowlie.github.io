'use strict';

fetch('http://ip-api.com/json/?fields=status,countryCode').then(response => response.json()).then(data => document.head.querySelector("[name~=isoCode][content]").content = data.countryCode.toLowerCase());