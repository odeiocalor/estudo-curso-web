// array

let arr = [10, 20, 30, 40]

function teste([a, b, , c, d = 100]) {
    console.log(a, b, c, d)
}

teste(arr)

// objeto 

let obj = {
    a: 10,
    b: 20,
    c: 30,
    d: 40
}

function teste2({ a: x, d, z = 10 }) {
    console.log(x, d, z)
}

teste2(obj)