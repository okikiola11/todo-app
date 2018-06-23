<template>
	
	<div >
		
		<input type="text" class="todo-input" placeholder="what needs to be done" v-model="newTodo"  @keyup.enter="addTodo"/>
		
		<div v-for="(todo, index) in todos" :key="todo.id" class="todo-item" >
			
			<div>
			
				{{todo.title}}
			
			</div>
			
			<div class="remove-item" @click="removeTodo(index, todo.id)">
				&times;
			</div>
			
		</div>
		
	</div>
	
</template>

<script>
	
	export default{
		name: 'todo-list',
		
		data(){
			return{
				newTodo: '',
				idForTodo: 0,
				todos:[
					
				]
			}
		},
		methods: {
		
			addTodo(){
				
				if(this.newTodo.trim().length == 0)
				{
					return
				}
				
				let newTodolst = {
				
					title: this.newTodo,
					completed: false
					
				}
				
				this.$http.post(this.base_url+'site/addTodos/', newTodolst)
					.then(function(response){
						
						console.log(response.body);
						
						this.todos.push({
							
							id: this.idForTodo,
							title: this.newTodo,
							completed: false,
						})
						
						this.newTodo = ''
						this.idForTodo++
										
				});

			},
			removeTodo(index, id){
				this.todos.splice(index, 1)
				this.$http.post(this.base_url+'site/deleteTodos/'+id)
					.then(function(response){
						
						console.log(response.body);
						
					});
			},
			
			fetchTodos(){
				this.$http.get(this.base_url+'site/fetchTodos')
					.then(function(response){
						//console.log(response.body.data);
						this.todos = JSON.parse(response.body.data);
					});
			}
		},
		created: function(){
			this.fetchTodos();
		}
	}
	
</script>

<style lang="scss">
	
	.todo-input{
		width: 100%;
		padding: 10px 18px;
		font-size: 18px;
		margin-bottom: 16px;
	}
	
	.todo-item{
		margin-bottom: 12px;
		display: flex;
		align-item: center;
		justify-content: space-between;
	}
	
	.remove-item{
		cursor:pointer;
		margin-left: 14px;
		&:hover{
			color: black;
		}
	}
</style>