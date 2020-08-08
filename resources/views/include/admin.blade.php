<script>
    @php $countries=\App\Country::all(); @endphp
    countries = JSON.parse("{{ $countries }}".replace(/&quot;/g,'"'));

    var abc=document.querySelector('div[id="14-dropdown-element"] > .panel-body > ul');
    
    countries.forEach(item => {

    abc.insertAdjacentHTML("beforeend",`<li id='country${item.id}'><a target="_self" href="/admin/holidays?country=${item.slug}"><span class="icon voyager-file-text"></span> <span class="title">${item.title}</span></a></li>`);

    });
    @if(request('country'))
        @php $country_id = \App\Country::where('slug',request('country'))->first()->id; @endphp
        document.querySelector('#country'+'{{ $country_id }}').classList.add('active');
        document.querySelector('#country'+'{{ $country_id }}').parentNode.parentNode.parentNode.parentNode.classList.add('active');
        var my_div = document.querySelector('#country'+'{{ $country_id }}').parentNode.parentNode.parentNode;
        my_div.classList.add('collapse-in');
        my_div.classList.remove('collapse');
    @endif
</script>