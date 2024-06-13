
const getResource = async (url) => {
  const response = await fetch(url);

  console.log(response)
}

getResource('https://jsonplaceholder.typicode.com/todos/1')

