import { KthLargest } from '..';

describe('Problem longest substring test', () => {
  const k = new KthLargest(3, [4, 5, 8, 2]);
  test('Should return length as 3 for the given input', () => {
    expect(k.add(3)).toBe(4);
    expect(k.add(5)).toBe(5);
    expect(k.add(10)).toBe(5);
    expect(k.add(9)).toBe(8);
    expect(k.add(4)).toBe(8);
  });
});
