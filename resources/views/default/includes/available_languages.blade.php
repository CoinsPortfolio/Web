<div class="btn-group" style="z-index: 99999999">
	<div class="ui floating dropdown labeled icon button">
	  <span class="text selected-language"></span>
	  <div class="menu" style="z-index: 99999999;width: 178px;">
	      <div class="ui icon search input">
	        <input type="text" placeholder="@lang('menu.SEARCH')...">
	      </div>
	      <div class="scrolling menu top-language-dropdown">
	        @foreach($available_languages as $language)
	            <div url="{{ URL::to('/') . '/' . $language->code . '/' . substr(Request::path(), 3) }}" class="item @if(LaravelLocalization::getCurrentLocale() === $language->code)selected active @endif" name="{{$language->name}}" value="{{$language->code}}">
	              <i class="{{ $language->flag }} flag"></i>{{ strtoupper($language->short_name) }}
	            </div>
	        @endforeach
	      </div>
	    </div>
	</div>
</div>