<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>vue project - 1 search filter and sort order</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <meta name="keywords1" content="usage of filter(), indexOf()">
    <meta name="keywords2" content="usage of sort(function (p1, p2))">
</head>
<body>
    <div id="app">
        <label for="search">Search a name</label>
        <input id="search" type="text" v-model="searchName">
        <ul>
            <li v-for="(person, index) in filterPersons" :key="index">
                @{{ person.name }} -- @{{ person.age }} -- @{{ person.skills }} -- @{{ index }}
            </li>
        </ul>
        <button @click=setSortOrder(1)>Sort by Age Ascend</button>
        <button @click=setSortOrder(2)>Sort by Age Descend</button>
        <button @click=setSortOrder(0)>Sort by Default</button>

    </div>
    <script>
        const vm = new Vue({
            el: '#app',
            data: {
                persons: [
                    {'name': 'Jone', 'age': 30, 'skills': 'python'},
                    {'name': 'Sally', 'age': 20, 'skills': 'c++'},
                    {'name': 'David', 'age': 28, 'skills': 'javascript'},
                    {'name': 'Jake', 'age': 28, 'skills': 'linux'},
                    {'name': 'Michael', 'age': 24, 'skills': 'php'},
                    {'name': 'Steve', 'age': 35, 'skills': 'php'}
                ],
                searchName: '',

                // define sortOrder value, if value equal 0, it is by default order, if value equal 1, it is ascending order, if value equal 2, it is descending order
                sortOrder: 0,

            },
            computed: {
                filterPersons() {
                    // get related data
                    const {persons, searchName, sortOrder} = this;

                    // define filtered data and return to the methods
                    // filter(p => true)
                    // indexOf() = -1, no data
                    // indexOf() !== -1 or indexOf() >=0,  data exists
                    // what is the differences of var, let and const

                    // define filtered array
                    let fPersons;

                    // filter data with an input value
                    fPersons = persons.filter(p => p.name.indexOf(searchName) !== -1);

                    // filtered data sorted by ascending (value = 1) or descending order (value = 2)
                    if (sortOrder !== 0) {
                        fPersons.sort(function (p1, p2) {
                            if (sortOrder === 1) {
                                return p1.age - p2.age;
                            } else {
                                return p2.age - p1.age;
                            }
                        })
                    }

                    return fPersons;
                }
            },
            methods: {

                // click will trigger reset of sortOrder value and boost the computed: filterPerson
                setSortOrder(order) {
                    this.sortOrder = order;
                }
            }
        })
    </script>
</body>
</html>
