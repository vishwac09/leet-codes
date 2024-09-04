export const getLucky = (s: string, k: number): number => {
  let number = '',
    sum = 0;
  for (let i = 0; i < s.length; i++) {
    number += String(s.charCodeAt(i) - 96);
  }
  while (k > 0) {
    sum = 0;
    for (let i = 0; i < number.length; i++) {
      sum += parseInt(number[i]);
    }
    number = sum.toString();
    k--;
  }

  return sum;
};

// const h  = getLucky('iiii', 1);
// const h  = getLucky('leetcode', 2);
// const h  = getLucky('dbvmfhnttvr', 5);
// console.log(h);
