<?php
	include 'inc/header.inc.php'
?>	
	<h2>
		About the author
	</h2>	
	<code>
		<pre>
describe 'Jack Lee', ->
	
	me = null

	beforeEach ->
		me =
			name: 'Jack Lee'
			gender: 'Male'
			nationality: 'Brazilian'
			age: (new Date().getFullYear()) - (new Date(1981, 5, 1).getFullYear())
			marital_status: 'single'
			languages: [
				'Portuguese'
				'English'
				'German'
				'Chinese'
			]

	it 'name is Jack Lee', ->
		expect(me.name).toBe 'Jack Lee'

	it 'is a male', ->
		expect(me.gender).toBe 'Male'

	it 'is Brazilian', ->
		expect(me.nationality).toEqual 'Brazilian'

	it 'is 32 years old this year', ->
		expect(me.age).toBe 32

	it 'is at the moment single but looking for some action ;)', ->
		expect(me.marital_status).toBe 'single'

	it 'speaks both English and German :)', ->
		expect(me.languages).toContain 'English'
		expect(me.languages).toContain 'German'

	it 'does not speak Japanese unfortunately :(', ->
		expect(me.languages).not.toContain 'Japanese'		
		</pre>
	</code>
<?php
	include 'inc/footer.inc.php'
?>