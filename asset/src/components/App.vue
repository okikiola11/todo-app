<template>
	
	<div id="app" class="container">
				
		<!--<HelloWorld/>-->
		
		<todo-list/>
		
	</div>
	
</template>

<script>
	
	import HelloWorld from './HelloWorld'
	import TodoList from './TodoList'
	
	export default {
		name: 'App',
		components: {
		
			HelloWorld,
			TodoList
		}
	
	}
	
</script>

<style>

* {

	box-sizing: border-box;
}

.container{
	max-width:600px;
	margin: 0 auto;
}

#app{
	
	text-align: center;
	color:#2c3e50;
	margin-top: 60px;
	font-size:24px;
}

</style>