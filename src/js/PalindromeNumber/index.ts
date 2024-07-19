export const isPalindrome = (x: number): boolean => {
  const inputAsString = x.toString();
  let p = 0,
    q = inputAsString.length - 1;
  const mid = inputAsString.length / 2;
  let inputIsPalindrome = true;
  while (p < mid) {
    if (inputAsString[p] !== inputAsString[q]) {
      inputIsPalindrome = false;
      break;
    }
    p++;
    q--;
  }
  return inputIsPalindrome;
};

// 1223221
// 1 <=> 1 ; i=0, j=6
// 2 <=> 2 ; i=1, j=5,
// 2 <=> 2 ; i=2, j=4
// console.log(isPalindrome(0));
// console.log(isPalindrome(123));
// console.log(isPalindrome(121));
// console.log(isPalindrome(1223221));
// console.log(isPalindrome(55));
