 <option value="notselected" selected="selected" data-pg-id="162">Select a Team</option>
 @foreach($teams as $team)
	  @if($team->name !== "Not Assigned")
      <option value="{{ $team->id }}" data-pg-id="162">{{ $team->name }}</option>
	  @endif
 @endforeach


