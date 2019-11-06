<html>
	<body>
	<div id='app'>
		Select Sections:
		<select v-model="selectedSect">
		@foreach($sections as $section)
			<option value="{{ $section->id }}">
				{{ $section->name }}
			</option>
		@endforeach
		</select><br><br>
		Paid Students:
		<select>
		@foreach($students as $student)
			<option value="{{ $student->id }}">
				{{ $student->last_name }} {{ $student->first_name }}
			</option>
		@endforeach
		</select>
		Unpaid Students:
		<select>
		@foreach($students as $student)
			<option value="{{ $student->id }}">
				{{ $student->last_name }} {{ $student->first_name }}
			</option>
		@endforeach
		</select>

	</div>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script>
	new Vue({
	el: '#app',
  data:{
  	selectedSect: ''
  }
})
</script>
</html>

