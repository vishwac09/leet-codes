/**
 * @param {number} n - a positive integer
 * @return {number}
 */
var hammingWeight = (n) => {
  const y = n.toString(2);
  let count = 0;
  for (let j=0; j<y.length;j++) {
    if (y[j] === '1') {
      count++;
    }
  }
  return count;
};

console.log(hammingWeight(0b00000000000000000000000000001011));
console.log(hammingWeight(0b00000000000000000000000010000000));
console.log(hammingWeight(0b11111111111111111111111111111101));
