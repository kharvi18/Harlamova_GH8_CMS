function add(x, n) {
  return x + n
}

function substruct(x, n) {
  return x - n
}

function multiple(x, n) {
  return x * n
}

function divider(x, n) {
  return x / n
}

function sin(x) {
  return Math.sin(x)
}

function sqrt(x) {
  return Math.sqrt(x)
}

function cos(x) {
  return Math.cos(x)
}

function factorial(n) {
  return n ? n * factorial(n - 1) : 1
}

function power(x, n) {
  let result = x

  for (let i = 1; i < n; i++) {
    result *= x
  }

  return result
}
