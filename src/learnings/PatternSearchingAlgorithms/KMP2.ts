export const kmp = function (txt: string, patt: string) {
  const newString = patt + '#' + txt;
  const pi = new Array(newString.length).fill(0);
  let i = 1,
    k = 0;
  while (i < newString.length) {
    if (newString[i] === newString[k]) {
      k++;
      pi[i] = k;
      i++;
    } else {
      if (k > 0) {
        k = pi[k - 1];
      } else {
        pi[i] = 0;
        i++;
      }
    }
  }
  console.log(pi);
  return pi[newString.length - 1];
};

const k = 'abcdabcdss';
const h = kmp(k, k.split('').reverse().join(''));
console.log(k.slice(h).split('').reverse().join('') + k);
