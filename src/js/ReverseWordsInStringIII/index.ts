export const reverseWords = (s: string): string => {
  const firstPart = s.split('').reverse().join('');
  return firstPart.split(' ').reverse().join(' ');
};
