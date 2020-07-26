var fs = require('fs')

let employees = [
    {
        id: 111,
        name: 'Ivan',
        salary: 5000,
        date: '2020-01-01'
    },
    {
        id: 222,
        name: 'Oleg',
        salary: 3000,
        date: '2020-01-01'
    },
    {
        id: 111,
        name: 'Ivan',
        salary: 5000,
        date: '2020-01-01'
    },
    {
        id: 333,
        name: 'Anya',
        salary: 3000,
        date: '2020-01-02'
    },
    {
        id: 444,
        name: 'Arman',
        salary: 5000,
        date: '2020-01-01'
    }
]

let groupEmployees = {};

for (var i = 0, len = employees.length, p; i < len; i++){
    p = employees[i]

    if (groupEmployees[p.date] === undefined)
        groupEmployees[p.date] = {}

    if (groupEmployees[p.date][p.id] === undefined)
        groupEmployees[p.date][p.id] = []

    groupEmployees[p.date][p.id].push(p)
}

console.log(groupEmployees)

let data = JSON.stringify(groupEmployees)

fs.writeFileSync('test.json', data)