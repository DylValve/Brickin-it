@if (isset($childTheme))
    <tr class="table-expand-row" data-open-details>
        <td>{{$childTheme->name}}</td>

        <td>
            @foreach($all_Themes as $parentTheme)
                @if($parentTheme->id == $childTheme->theme_id)
                    {{$parentTheme->name}}
                @endif
            @endforeach
        </td>

        <td class="flex justify-center">
            <a href="{{route('themes.show',$childTheme)}}" class="button button-primary"
               type="submit">view</a>
            <a href="{{route('themes.edit',$childTheme)}}" class="button button-primary"
               type="submit">edit</a>
            <form method="POST" action="{{route('themes.destroy', $childTheme)}}">
                @method('DELETE')
                @csrf
                <button class="button button-red" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @foreach ($childTheme->themes as $childTheme)
        @include('admin.theme.child_theme_table', compact('childTheme'))
    @endforeach
@endif
