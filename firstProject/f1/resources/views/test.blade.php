@php
$user = "Yahoo Baba";
$fruits = array("apple", "banana", "cherry");
@endphp

<script>
  // Pass the PHP variable to JavaScript correctly using json
  var data = @json($user);
  var result = {{Js::from($fruits)}};
  result.forEach(fruit => {
      console.log(fruit)
  });

  console.log(result);
</script>